<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Clientevendedor_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function da_listarPersona($tipo_listado, $empresa) {
        $instruccion = "CALL sim_sp_qry_personas ('" . $tipo_listado . "','" . $empresa . "','1');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }

    function da_listarClientesvendedor() {
        $instruccion = "CALL sim_sp_qry_clientesxvendedor ('qry_clientesxvendedor','','');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }

    function da_registrarClientesxVendedor($cbo_vendedor, $cbo_cliente) {
        $instruccion = "CALL sim_sp_ins_clientexvendedor('ins_clientexvendedor','" . $cbo_vendedor . "','" . $cbo_cliente . "');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

    function da_estadoClientevendedor($nidvalor) {

        $instruccion = "CALL sim_sp_upd_clientevendedor('upd_estadoCliven','" . $nidvalor . "');";

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