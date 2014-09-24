<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Asignarclientes extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('almacen/producto_model');
        $this->load->model('almacen/linea_model');
        $this->load->model('mantenedor/persona_model');
        $this->load->model('mantenedor/empresas_model');
        $this->load->model('distribucion/asignarclientes_model');
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
        $data['main_content'] = 'distribucion/asignarclientes/panel_view';
//        $data['listarLineas'] = $this->linea_model->da_listarLinea();
        $data['listarPersonas'] = $this->persona_model->da_listarPersona('qry_personas');
        $data['listarEmpresas'] = $this->empresas_model->da_listarEmpresasActivas();
        $data['titulo'] = 'Asignar Productos | SIM';
        $this->load->view('master/plantilla_view', $data);
    }

    function listarClientesxEmpresas() {

        $data['listarClientesxEmpresas'] = $this->asignarclientes_model->da_listarClientesxEmpresas();
        $this->load->view('distribucion/asignarclientes/qry_view', $data);
    }

    function registrarClientesxEmpresa() {

        $validar = $this->asignarclientes_model->da_registrarClientesxEmpresa($_POST['cbo_empresa'], $_POST['cbo_cliente']);

        if ($validar) {
            echo $validar['msg'];
        } else {
            echo $validar['msg'];
        }
    }

    function estadoCliente() {
        $nidvalor = $_POST['nidvalor'];
        $result = $this->asignarclientes_model->da_estadoCliente($nidvalor);
        if ($result) {
            echo $result['msg'];
        } else {
            echo $result['msg'];
        }
    }

}
