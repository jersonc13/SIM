<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Persona_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function da_listarPersona($tipo_listado) {
        $instruccion = "CALL sim_sp_qry_personas ('".$tipo_listado."','1','1');";
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

    function da_registrarPersona($tipo_accion,$txtapellidos,$txtnombres,$tipo_documento,$txtdniruc,$email,$phone,$operador,$estadocivil,$sexo,$address,$cbo_departamento,$cbo_provincia,$cbo_distrito,$txtlatitud,$txtlongitud) {
        $instruccion = "CALL sim_sp_ins_persona('".$tipo_accion."','" . $txtapellidos . "','" . $txtnombres ."','" . $tipo_documento . "','" . $txtdniruc . "','" . $email . "','" . $phone . "','" . $operador ."','" . $estadocivil . "','" . $sexo . "','" . $address . "','" . $cbo_departamento . "','" . $cbo_provincia . "','" . $cbo_distrito . "','" . $txtlatitud . "','" . $txtlongitud . "');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

    function da_estadoPersona($nidvalor) {

        $instruccion = "CALL sim_sp_upd_persona ('upd_estadoPer','" . $nidvalor . "','','','');";

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

    function dblistardepartamento() {
        $instruccion = "CALL sim_sp_qry_ubigeo ('qry_departamento','1');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }
    function dblistarroles() {
        $instruccion = "CALL sim_sp_qry_cargarroles ('qry_allroles','');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }

    function dblistarprovincia($idDepartamento) {
        $instruccion = "CALL sim_sp_qry_ubigeo ('qry_provincia','" . $idDepartamento . "');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }

    function dblistardistrito($idProvincia) {
        $instruccion = "CALL sim_sp_qry_ubigeo ('qry_distrito','" . $idProvincia . "');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }

}

?>