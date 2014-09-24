<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Asignarvendedor extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('almacen/producto_model');
        $this->load->model('almacen/linea_model');
        $this->load->model('mantenedor/persona_model');
        $this->load->model('mantenedor/empresas_model');
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
        $data['main_content'] = 'distribucion/asignarvendedor/panel_view';
        $data['listarPersonas'] = $this->persona_model->da_listarPersona('qry_personas');
        $data['listarEmpresas'] = $this->empresas_model->da_listarEmpresasActivas();
        $data['titulo'] = 'Asignar Productos | SIM';
        $this->load->view('master/plantilla_view', $data);
    }

    function listarVendedorxEmpresas() {

        $data['listarVendedorxEmpresas'] = $this->asignarvendedor_model->da_listarVendedorxEmpresas('qry_vendedorxempresa',$this->session->userdata('ssnidpersona'));
        $this->load->view('distribucion/asignarvendedor/qry_view', $data);
    }

    function registrarVendedorxEmpresa() {

        $validar = $this->asignarvendedor_model->da_registrarVendedorxEmpresa($_POST['cbo_empresa'], $_POST['cbo_vendedor']);

        if ($validar) {
            echo $validar['msg'];
        } else {
            echo $validar['msg'];
        }
    }
    
    function estadoVendedor() {
        $nidvalor = $_POST['nidvalor'];
        $result = $this->asignarvendedor_model->da_estadoVendedor($nidvalor);
        if ($result) {
            echo $result['msg'];
        } else {
            echo $result['msg'];
        }
    }
}
