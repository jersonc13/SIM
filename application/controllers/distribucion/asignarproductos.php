<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Asignarproductos extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('almacen/producto_model');
        $this->load->model('almacen/linea_model');
        $this->load->model('mantenedor/persona_model');
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
        $data['listarEmpresas'] = $this->persona_model->da_listarPersona('qry_empresas');
        $data['titulo'] = 'Asignar Productos | SIM';
        $this->load->view('master/plantilla_view', $data);
    }

    function listarProductosEmpresas() {

        $data['listarProductosxEmpresas'] = $this->asignarproductos_model->da_listarProductoxEmpresas();
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

    function actualizarArea() {

        $txte_nidarea = $_POST['txte_nidarea'];
        $txte_area = $_POST['txte_area'];
        $txte_alias = $_POST['txte_alias'];

        $validar = $this->area_model->dbactualizarArea($txte_nidarea, $txte_area, $txte_alias);

        if ($validar) {
            echo $validar['msg'];
        } else {
            echo $validar['msg'];
        }
    }

    function listarAreas() {

        $data['listarAreas'] = $this->areas_model->da_listarAreas();
        $this->load->view('mantenedor/areas/qry_view', $data);
    }

    function editarArea() {
        $nidarea = $_POST['nidarea'];
        $data['editarArea'] = $this->areas_model->dbeditarArea($nidarea);
        $this->load->view('mante/area/upd_view', $data);
    }

    function estadoAreas() {
        $nidarea = $_POST['nidareas'];
        $result = $this->areas_model->da_estadoAreas($nidarea);

        if ($result) {
            echo 1;
        } else {
            echo 0;
        }
    }

}
