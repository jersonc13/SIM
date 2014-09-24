<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Empresas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('mantenedor/empresas_model');
//        $this->load->model('seguridad/permisos_model');
    }

    function _validaracceso() {
        $logeado = $this->session->userdata('logeado');
        $nidusuario = $this->session->userdata('ssnidusuario');

        if ($logeado != true OR $nidusuario = null) {
            redirect(URL_MAIN);
        }
    }

    function index() {
        $data['main_content'] = 'mantenedor/empresas/panel_view';
        $data['titulo'] = 'Empresas | SIM';
        $this->load->view('master/plantilla_view', $data);
    }

    function buscarPersona() {
        $txtPersona = $_POST['txtPersona'];
        $data['listarPersonas'] = $this->empresas_model->dblistarpersonas($txtPersona);
        $this->load->view('mantenedor/empresas/qrypermisos_view', $data);
    }

    function registrarUsuarios() {
        $txtusuario = $_POST['txtusuario'];
        $txtcontrasena = $_POST['txtcontrasena'];
        $txtnperid = $_POST['txtnperid'];
        $validar = $this->empresas_model->da_registrarUsuarios($txtusuario, $txtcontrasena, $txtnperid);

        if ($validar) {
            echo $validar['msg'];
        } else {
            echo $validar['msg'];
        }
    }

    function crearempresa() {
        $nPerId = $_POST['nidvalor'];
        $data['nPerId'] = $nPerId;
        $result = $this->empresas_model->da_existeempresa($nPerId);
        if ($result['msg'] == 2) {
            echo $result['msg'];
        } else {
            echo $result['msg'];
        }
    }

    function listarEmpresas() {

        $data['listarEmpresas'] = $this->empresas_model->da_listarEmpresas();
        $this->load->view('mantenedor/empresas/qry_view', $data);
    }

    function estadoEmpresas() {
        $nidvalor = $_POST['nidvalor'];
        $result = $this->empresas_model->da_estadoEmpresas($nidvalor);
        if ($result) {
            echo $result['msg'];
        } else {
            echo $result['msg'];
        }
    }

}
