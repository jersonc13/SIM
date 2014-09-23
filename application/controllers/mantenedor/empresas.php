<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Empresas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('mantenedor/empresas_model');
        $this->load->model('seguridad/permisos_model');
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

    function vista_crearusuario() {
        $nPerId = $_POST['nidvalor'];
        $data['nPerId'] = $nPerId;
        $result = $this->empresas_model->da_existeusuario($nPerId);
        if ($result['msg'] == 2) {
            echo $result['msg'];
        } else {
            $this->load->view('mantenedor/empresas/ins_view', $data);
        }
    }

    function listarEmpresas() {

        $data['listarEmpresas'] = $this->empresas_model->da_listarEmpresas();
        $this->load->view('mantenedor/empresas/qry_view', $data);
    }

    function estadoUsuarios() {
        $nidvalor = $_POST['nidvalor'];
        $result = $this->empresas_model->da_estadoUsuarios($nidvalor);
        if ($result) {
            echo $result['msg'];
        } else {
            echo $result['msg'];
        }
    }

}
