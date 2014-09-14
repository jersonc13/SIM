<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Productopedido extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('almacen/producto_model');
        $this->load->model('almacen/linea_model');
        $this->load->model('mantenedor/persona_model');
        $this->load->model('distribucion/clientevendedor_model');
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
        $data['main_content'] = 'ventas/productopedido/panel_view';
        $data['listarLineas'] = $this->linea_model->da_listarLinea();
        $data['listarClientes'] = $this->persona_model->da_listarPersona('qry_clientes');
        $data['listarVendedor'] = $this->persona_model->da_listarPersona('qry_vendedor');
        $data['titulo'] = 'Asignar Productos | SIM';
        $this->load->view('master/plantilla_view', $data);
    }

    function listarClientesxVendedor() {

        $data['listarClientesxVendedor'] = $this->clientevendedor_model->da_listarClientesvendedor();
        $this->load->view('distribucion/clientevendedor/qry_view', $data);
    }

    function registrarClientesxVendedor() {

        $validar = $this->clientevendedor_model->da_registrarClientesxVendedor($_POST['cbo_vendedor'], $_POST['cbo_cliente']);

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
