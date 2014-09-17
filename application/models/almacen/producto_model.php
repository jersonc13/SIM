<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Producto_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function da_listarProducto() {
        $instruccion = "CALL sim_sp_qry_producto ('qry_producto','0','0');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }
    
    function da_registrarProducto($txtProducto, $cbo_linea) {
        $instruccion = "CALL sim_sp_ins_producto('ins_producto','" . $txtProducto . "','" . $cbo_linea . "');";
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