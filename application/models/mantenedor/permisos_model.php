<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Permisos_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function dblistarpersonas($txtPersona) {
        $instruccion = "CALL sim_sp_qry_permisos ('qry_persona','" . $txtPersona . "');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }

    function da_cargaropcionpadre($nPerId) {

        $instruccion = "CALL sim_sp_qry_cargaropciones ('qry_opcpadre','" . $nPerId . "');";
        $this->db->close();
        $query = $this->db->query($instruccion);

        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }

    function da_cargaropcionp() {

        $instruccion = "CALL sim_sp_qry_cargaropciones ('qry_opcp',NULL);";
        $this->db->close();
        $query = $this->db->query($instruccion);

        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }

    function da_cargaropcionhijo($nPerId) {

        $instruccion = "CALL sim_sp_qry_cargaropciones ('qry_opchijo','" . $nPerId . "');";
        $this->db->close();
        $query = $this->db->query($instruccion);

        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }
    function da_cargaropcionh() {

        $instruccion = "CALL sim_sp_qry_cargaropciones ('qry_opch',NULL);";
        $this->db->close();
        $query = $this->db->query($instruccion);

        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }
    public function PermisosxUsuarioUpd($arrayUpdate){
        foreach ($arrayUpdate as $key => $sql) {
            $this->db->query($sql);
        }
    }
    public function PermisosIns($insertSql){
        if( $this->db->query($insertSql) ){
            return true;
        }else{
            return false;
        }
    }
    public function da_setopcionUsuario($uid,$ids){
        $rpt_process;
        $idPadreTemp = 0;
        $idPadreMuestra = -1;
        $opcionusu = array();
        $this->db->trans_start();
        /*Eliminamos Permisos*/
        $this->db->delete('sim_opcionusuario', array( 'nidusuario' => $uid) );
        /*Amoldamos el Array para el envio en batch*/
        foreach ( $ids as $key => $idopcion ) {
            $tmp = $this->db->select('nvalor')->from('sim_opcion')->where('nidopcion', $idopcion)->get()->result_array();
            $idPadreTemp = $tmp[0]['nvalor'];
            if ($idPadreMuestra != $idPadreTemp ) {
                $idPadreMuestra = $idPadreTemp;
                $opcionusu[] = array(
                  'nidopcion' => $idPadreMuestra ,
                  'nidusuario' => $uid ,
                  'nestado' => 1,
                  'copcusuguardar' => 0 ,
                  'copcusuactualizar' => 0 ,
                  );
            }

            $opcionusu[] = array(
              'nidopcion' => $idopcion ,
              'nidusuario' => $uid ,
              'nestado' => 1,
              'copcusuguardar' => 0 ,
              'copcusuactualizar' => 0 ,
              );
        }
        $this->db->insert_batch('sim_opcionusuario', $opcionusu); 
        $this->db->trans_complete();

        return ( $this->db->trans_status() === FALSE )? 0 : 1 ;
        // print_p( $opcionusu );exit();
    }

}

?>