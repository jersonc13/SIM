<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Producto_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function da_listarProducto( $accion='qry_producto', $idProd = 0, $vcproductos = 0 ) {
        $instruccion = "CALL sim_sp_qry_producto ('".$accion."',".$idProd.",".$vcproductos.");";
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
    
    function da_estadoProducto($nidvalor) {

        $instruccion = "CALL sim_sp_upd_producto ('upd_estadoProducto','" . $nidvalor . "');";

        $query = $this->db->query($instruccion);
        $this->db->close();

        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

    public function editar( $data, $id ){
        $this->db->where('nidproductos', $id);
        $query = $this->db->update('sim_productos', $data);

        if( $query){
            return true;
        }else{
            return false;
        }
    }

}

?>