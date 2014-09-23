<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Asignarvendedor_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function da_listarVendedorxEmpresas($accion,$idpersona) {
        $instruccion = "CALL sim_sp_qry_vendedorxempresa ('$accion',$idpersona);";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }

    function da_registrarVendedorxEmpresa($cbo_empresa, $cbo_vendedor) {
        $instruccion = "CALL sim_sp_ins_vendedorxempresa('ins_vendedorxempresa','" . $cbo_empresa . "','" . $cbo_vendedor . "');";
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