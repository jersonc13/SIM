<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Asignarclientes_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function da_listarClientesxEmpresas() {
        $instruccion = "CALL sim_sp_qry_clientesxempresa ('qry_clientesxempresa','','');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }

    function da_registrarClientesxEmpresa($cbo_empresa, $cbo_cliente) {
        $instruccion = "CALL sim_sp_ins_clientexempresa('ins_clientexempresa','" . $cbo_empresa . "','" . $cbo_cliente . "');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

    function da_estadoCliente($nidvalor) {

        $instruccion = "CALL sim_sp_upd_clientexempresa ('upd_estadoClientexempresa','" . $nidvalor . "');";

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