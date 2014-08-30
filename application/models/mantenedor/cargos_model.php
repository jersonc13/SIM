<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cargos_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function da_listarCargos() {
        $instruccion = "CALL sim_sp_qry_cargos ('qry_cargos','');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }

    function da_registrarAreas($txtnombrearea, $txtalias, $txtdependencia) {
        $instruccion = "CALL sim_sp_ins_areas('ins_areas','" . $txtnombrearea . "','" . $txtalias . "','" . $txtdependencia . "');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

    function da_estadoAreas($nidarea) {

        $instruccion = "CALL sim_sp_upd_areas ('upd_estadoArea','" . $nidarea . "','','','');";

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
        $instruccion = "CALL sim_sp_qry_areas ('qry_areasxid','".$txtbuscarArea."');";
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