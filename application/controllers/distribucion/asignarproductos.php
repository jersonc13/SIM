<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Asignarproductos extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('almacen/producto_model');
        $this->load->model('almacen/linea_model');
        $this->load->model('mantenedor/empresas_model');
        $this->load->model('distribucion/asignarproductos_model');
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
        $data['main_content'] = 'distribucion/asignarproductos/panel_view';
        $data['listarLineas'] = $this->linea_model->da_listarLinea();
        $data['listarProductos'] = $this->producto_model->da_listarProducto();
        $data['listarEmpresas'] = $this->empresas_model->da_listarEmpresasActivas();
        $data['titulo'] = 'Asignar Productos | SIM';
        $this->load->view('master/plantilla_view', $data);
    }

    function listarProductosEmpresas() {

        $data['listarProductosxEmpresas'] = $this->asignarproductos_model->da_listarProductoxEmpresas('qry_productoxempresa',0);
        $this->load->view('distribucion/asignarproductos/qry_view', $data);
    }

    function registrarproductoxempresa() {

        $validar = $this->asignarproductos_model->da_registrarProductoxEmpresa($_POST['cbo_empresa'], $_POST['cbo_producto']);

        if ($validar) {
            echo $validar['msg'];
        } else {
            echo $validar['msg'];
        }
    }

    function estadoProducto() {
        $nidvalor = $_POST['nidvalor'];
        $result = $this->asignarproductos_model->da_estadoProducto($nidvalor);
        if ($result) {
            echo $result['msg'];
        } else {
            echo $result['msg'];
        }
    }

}
