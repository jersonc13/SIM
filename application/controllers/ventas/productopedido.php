<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Productopedido extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('distribucion/asignarvendedor_model');
        $this->load->model('distribucion/asignarproductos_model');
        $this->load->model('ventas/productopedido_model');
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
        $data['idpersona'] = $this->session->userdata('ssnidpersona');
        $idEmpresa = $this->asignarvendedor_model->da_listarVendedorxEmpresas('qry_empresaxvendedor',$this->session->userdata('ssnidpersona'));
        $data['listarProductosxEmpresas'] = $this->asignarproductos_model->da_listarProductoxEmpresas('qry_productoxempresa',$idEmpresa[0]['nidperroles']);
        $data['idempresa'] = $idEmpresa[0]['nidperroles'];
        $data['titulo'] = 'Pedido de Producto | SIM';
        $this->load->view('master/plantilla_view', $data);
    }

    function listarClientesxVendedor() {

        $data['listarClientesxVendedor'] = $this->clientevendedor_model->da_listarClientesvendedor();
        $this->load->view('distribucion/clientevendedor/qry_view', $data);
    }

    function registrarProductoPedido() {

        $validar = $this->productopedido_model->da_registrarProductoPedido($_POST['cbo_productoempresa'], $_POST['txtcantidad'], $_POST['idempresa'], $_POST['idpersona']);

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
