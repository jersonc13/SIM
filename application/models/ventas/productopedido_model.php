<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Productopedido_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function da_listarProductoxEmpresas($accion, $empresa) {
        $instruccion = "CALL sim_sp_qry_productopedido ('$accion',$empresa);";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }

    function da_registrarProductoPedido($cbo_productoempresa, $txtcantidad, $idempresa, $idpersona) {
        $instruccion = "CALL sim_sp_ins_productopedido('ins_productopedido','" . $cbo_productoempresa . "','" . $txtcantidad . "','" . $idempresa . "','" . $idpersona . "');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

    function da_listarProductopedido() {
        $instruccion = "CALL sim_sp_qry_productopedido ('qry_productopedido','');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }

}
