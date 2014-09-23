<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Asignarroles extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('mantenedor/usuarios_model');
        $this->load->model('mantenedor/asignarroles_model');
        
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
        $data['main_content'] = 'mantenedor/asignarroles/panel_view';
        $data['titulo'] = 'Asignar Roles | SIM';
        $this->load->view('master/plantilla_view', $data);
    }

    function buscarPersona() {
        $txtPersona = $_POST['txtPersona'];
        $data['listarPersonas'] = $this->permisos_model->dblistarpersonas($txtPersona);
        $this->load->view('mantenedor/asignarroles/qrypermisos_view', $data);
    }

    function registrarUsuarios() {
//        $txtusuario = $_POST['txtusuario'];
//        $txtcontrasena = $_POST['txtcontrasena'];
        $cbo_tipousuarios = $_POST['cbo_tipousuarios'];
        $txtnperid = $_POST['txtnperid'];
        $validar = $this->asignarroles_model->da_registrarUsuarios($cbo_tipousuarios, $txtnperid);

        if ($validar) {
            echo $validar['msg'];
        } else {
            echo $validar['msg'];
        }
    }

    function vista_crearusuario() {
        $nPerId = $_POST['nidvalor'];
        $data['nPerId'] = $nPerId;
        $data['listarRoles'] = $this->usuarios_model->da_listarRoles();
        $this->load->view('mantenedor/asignarroles/ins_view', $data);
    }

    function listarUsuarios() {

        $data['listarUsuarios'] = $this->usuarios_model->da_listarUsuarios();
        $this->load->view('mantenedor/usuarios/qry_view', $data);
    }

    function editarArea() {
        $nidarea = $_POST['nidarea'];
        $data['editarArea'] = $this->usuarios_model->dbeditarArea($nidarea);
        $this->load->view('mante/area/upd_view', $data);
    }

    function estadoAreas() {
        $nidarea = $_POST['nidusuarios'];
        $result = $this->usuarios_model->da_estadoAreas($nidarea);

        if ($result) {
            echo 1;
        } else {
            echo 0;
        }
    }

    function buscarAreas() {
        $txtbuscarArea = $_POST['txtbuscarArea'];
        $data['listarAreaxId'] = $this->usuarios_model->dblistarareaxid($txtbuscarArea);
        $data['listarAreas'] = $this->usuarios_model->da_listarAreas();
        $this->load->view('mantenedor/usuarios/upd_view', $data);
    }

}
