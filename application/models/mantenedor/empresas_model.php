<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Empresas_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function da_listarEmpresas() {
        $instruccion = "CALL sim_sp_qry_empresas ('qry_empresas','','');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }
    
    function da_listarEmpresasActivas() {
        $instruccion = "CALL sim_sp_qry_empresas ('qry_empresasactivas','','');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }

    function da_existeempresa($nPerId) {
        $instruccion = "CALL sim_sp_qry_empresas('qry_empresaxper','" . $nPerId . "','');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

    function da_getCodUser($nperid) {
        $instruccion = "CALL sim_sp_qry_empresas ('qry_idUserByCodPerson','" . $nperid . "');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array()[0]['nidusuario']);
        } else {
            return 0;
        }
    }

    function da_listarRoles() {
        $instruccion = "CALL sim_sp_qry_cargarroles ('qry_rolesall','');";

        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

    function da_registrarEmpresas($txtusuario, $txtcontrasena, $txtnperid) {
        $instruccion = "CALL sim_sp_ins_empresas('ins_empresas','" . $txtusuario . "','" . $txtcontrasena . "','" . $txtnperid . "');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

    function dblistarpersonas($txtPersona) {
        $instruccion = "CALL sim_sp_qry_empresas ('qry_persona','" . $txtPersona . "','');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }

    function da_estadoEmpresas($nidvalor) {

        $instruccion = "CALL sim_sp_upd_empresas ('upd_estadoEmp','" . $nidvalor . "');";

        $query = $this->db->query($instruccion);
        $this->db->close();

        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

    function dbeditarArea($nidganadores) {

        $instruccion = "CALL SP_S_Ganadores ('edt_ganadores','" . $nidganadores . "');";

        $query = $this->db->query($instruccion);
        $this->db->close();

        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

    function dblistarareaxid($txtbuscarArea) {
        $instruccion = "CALL sim_sp_qry_areas ('qry_areasxid','" . $txtbuscarArea . "');";
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