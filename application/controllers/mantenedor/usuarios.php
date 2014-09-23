<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('mantenedor/usuarios_model');
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
//        $data['listarUsuarios'] = $this->usuarios_model->da_listarUsuarios();
//        $data['listarRoles'] = $this->usuarios_model->da_listarRoles();
        $data['main_content'] = 'mantenedor/usuarios/panel_view';
        $data['titulo'] = 'Usuarios | SIM';
        $this->load->view('master/plantilla_view', $data);
    }

    function buscarPersona() {
        $txtPersona = $_POST['txtPersona'];
        $data['listarPersonas'] = $this->usuarios_model->dblistarpersonas($txtPersona);
        $this->load->view('mantenedor/usuarios/qrypermisos_view', $data);
    }

    function registrarUsuarios() {
        $txtusuario = $_POST['txtusuario'];
        $txtcontrasena = $_POST['txtcontrasena'];
        $txtnperid = $_POST['txtnperid'];
        $validar = $this->usuarios_model->da_registrarUsuarios($txtusuario, $txtcontrasena, $txtnperid);

        if ($validar) {
            echo $validar['msg'];
        } else {
            echo $validar['msg'];
        }
    }

    function vista_crearusuario() {
        $nPerId = $_POST['nidvalor'];
        $data['nPerId'] = $nPerId;
        $result = $this->usuarios_model->da_existeusuario($nPerId);
        if ($result['msg'] == 2) {
            echo $result['msg'];
        } else {
            $this->load->view('mantenedor/usuarios/ins_view', $data);
        }

    }

    function listarUsuarios() {

        $data['listarUsuarios'] = $this->usuarios_model->da_listarUsuarios();
        $this->load->view('mantenedor/usuarios/qry_view', $data);
    }

    function estadoUsuarios() {
        $nidvalor = $_POST['nidvalor'];
        $result = $this->usuarios_model->da_estadoUsuarios($nidvalor);
        if ($result) {
            echo $result['msg'];
        } else {
            echo $result['msg'];
        }
    }

}
