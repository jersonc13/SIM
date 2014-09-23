<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Linea_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function da_listarLinea() {
        $instruccion = "CALL sim_sp_qry_linea ('qry_linea','0','0');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }

    function da_registrarLinea($txtLinea, $txtAlias) {
        $instruccion = "CALL sim_sp_ins_linea('ins_linea','" . $txtLinea . "','" . $txtAlias . "');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

    function da_estadoLinea($nidvalor) {

        $instruccion = "CALL sim_sp_upd_linea ('upd_estadoLinea','" . $nidvalor . "');";

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