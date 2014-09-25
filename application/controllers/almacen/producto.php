<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Producto extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('almacen/producto_model');
        $this->load->model('almacen/linea_model');
    }

    function _validaracceso() {
        $logeado = $this->session->userdata('logeado');
        $nidusuario = $this->session->userdata('ssnidusuario');

        if ($logeado != true OR $nidusuario = null) {
            redirect(URL_MAIN);
        }
    }

    function index() {
//        $data['listarAreas'] = $this->areas_model->da_listarAreas();
        $data['main_content'] = 'almacen/producto/panel_view';
        $data['listarLineas'] = $this->linea_model->da_listarLinea();
        $data['titulo'] = 'Producto | SIM';
        $this->load->view('master/plantilla_view', $data);
    }

    function listarProducto() {

        $data['listarProductos'] = $this->producto_model->da_listarProducto();
        $this->load->view('almacen/producto/qry_view', $data);
    }

    function registrarProducto() {

        $validar = $this->producto_model->da_registrarProducto($_POST['txtProducto'], $_POST['cbo_linea']);

        if ($validar) {
            echo $validar['msg'];
        } else {
            echo $validar['msg'];
        }
    }

    function estadoProducto() {
        $nidvalor = $_POST['nidvalor'];
        $result = $this->producto_model->da_estadoProducto($nidvalor);
        if ($result) {
            echo $result['msg'];
        } else {
            echo $result['msg'];
        }
    }

    function getEdit(){
        $idProd  = $this->input->post('idprod');
        $data['idlinea'] = $this->input->post('idlinea');
        $data['cbolistarLineas'] = $this->linea_model->da_listarLinea('qry_linea_estado','1');
        $data['producto'] = $this->producto_model->da_listarProducto('qry_producto_get',$idProd)[0];
        $this->load->view('almacen/producto/upd_view', $data);
    }

    function editarProducto(){
        $rpt = "";
        $nidproductos = $this->input->post('txtid');
        $data['cproductos'] = $this->input->post('txtUpdProducto');
        $data['nidlinea'] = $this->input->post('cbo_linea');
        $data['nestado'] = $this->input->post('estado');
        if( $this->producto_model->editar( $data, $nidproductos ) ){
            $rpt = "1";
        }else{
            $rpt = "0";
        }
        echo $rpt;
    }

}
