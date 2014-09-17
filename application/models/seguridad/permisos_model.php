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

}

?>