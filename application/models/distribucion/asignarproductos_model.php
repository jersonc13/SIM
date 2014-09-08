<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Asignarproductos_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function da_listarProductoxEmpresas() {
        $instruccion = "CALL sim_sp_qry_productoxempresa ('qry_productoxempresa','','');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }
    
    function da_registrarProductoxEmpresa($cbo_empresa, $cbo_producto) {
        $instruccion = "CALL sim_sp_ins_productoxempresa('ins_productoxempresa','" . $cbo_empresa . "','" . $cbo_producto . "');";
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