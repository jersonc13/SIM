<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Clientevendedor extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('almacen/producto_model');
        $this->load->model('almacen/linea_model');
        $this->load->model('mantenedor/persona_model');
        $this->load->model('distribucion/clientevendedor_model');
        $this->load->model('distribucion/asignarvendedor_model');
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
        $data['main_content'] = 'distribucion/clientevendedor/panel_view';
        $idEmpresa = $this->asignarvendedor_model->da_listarVendedorxEmpresas('qry_empresaxvendedor',$this->session->userdata('ssnidpersona'));
        $data['listarClientes'] = $this->clientevendedor_model->da_listarPersona('qry_clientes',$idEmpresa[0]['nidempresas']);
        $data['listarVendedor'] = $this->clientevendedor_model->da_listarPersona('qry_vendedor',$idEmpresa[0]['nidempresas']);
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
    
     function estadoClientevendedor() {
        $nidvalor = $_POST['nidvalor'];
        $result = $this->clientevendedor_model->da_estadoClientevendedor($nidvalor);
        if ($result) {
            echo $result['msg'];
        } else {
            echo $result['msg'];
        }
    }

}
