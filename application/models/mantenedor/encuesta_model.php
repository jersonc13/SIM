<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Encuesta_model extends CI_Model {

     function __construct() {
        parent::__construct();
    }
    
    function da_listarEmpresa() {
        $instruccion = "CALL sim_sp_qry_empresa ('qry_empresas','','');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }
    
    function da_listarEncuesta() {
        $instruccion = "CALL sim_sp_qry_encuesta ('qry_encuesta','','');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }

    function da_ingresarEncuesta($cbo_empresa,$txt_encuesta) {
        $instruccion = "CALL sim_sp_ins_encuesta('ins_encuesta','".$txt_encuesta."','".$cbo_empresa."','".$this->session->userdata('ssnidusuario')."');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

    function da_estadoEncuesta($nidvalor) {

        $instruccion = "CALL sim_sp_upd_encuesta ('upd_estadoEnc','" . $nidvalor . "','','','');";

        $query = $this->db->query($instruccion);
        $this->db->close();

        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }
    
    function dbeditar($nidganadores) {

        $instruccion = "CALL SP_S_Ganadores ('edt_ganadores','" . $nidganadores . "');";

        $query = $this->db->query($instruccion);
        $this->db->close();

        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

}

?>