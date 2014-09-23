<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('mantenedor/usuarios_model');
        $this->load->model('mantenedor/permisos_model');
    }

    function _validaracceso() {
        $logeado = $this->session->userdata('logeado');
        $nidusuario = $this->session->userdata('ssnidusuario');

        if ($logeado != true OR $nidusuario = null) {
            redirect(URL_MAIN);
        }
    }

    function index() {
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
        $rpta = -1;
        $txtusuario = $_POST['txtusuario'];
        $txtcontrasena = $_POST['txtcontrasena'];
        $txtnperid = $_POST['txtnperid'];
        $validar = $this->usuarios_model->da_registrarUsuarios($txtusuario, $txtcontrasena, $txtnperid);

        if ($validar) {
            $id = $this->input->post('ids');
            $uid = $this->usuarios_model->da_getCodUser($txtnperid);
            $rpta = $this->permisos_model->da_setopcionUsuario( $uid, $id );            
        } else {
            $rpta = $validar['msg'];
        }
        echo $rpta;
    }

    function vista_crearusuario() {
        $nPerId = $_POST['nidvalor'];
        $data['nPerId'] = $nPerId;
        $result = $this->usuarios_model->da_existeusuario($nPerId);
        if ($result['msg'] == 2) {
            echo $result['msg'];
        } else {
            $data['permisos'] = $this->_cargarPermisos();
            $this->load->view('mantenedor/usuarios/ins_view', $data);
        }

    }

    function _cargarPermisos(){
        $modulos = $this->permisos_model->da_cargaropcionp();
        $menuModulo = $this->permisos_model->da_cargaropcionh();
        $temp = array();
        foreach( $modulos as $key => $value ) {
            $temp[$value['nidopcion']]['key'] = $value['nidopcion'];
            $temp[$value['nidopcion']]['title'] = $value['copcion'];
            $temp[$value['nidopcion']]['expand'] = true;
            $temp_menu = array();
            $i=0;
            foreach( $menuModulo as $menuHijos ) {
                if( $value['nidopcion'] == $menuHijos['nidhijo'] ) {
                    $temp_menu[$i]['key'] = $menuHijos['nidopcion'];
                    $temp_menu[$i]['title'] = $menuHijos['copcion'];
                    $i++;
                    $temp[$value['nidopcion']]['isFolder'] = true;
                    $temp[$value['nidopcion']]['children'] = $temp_menu;
                }
            }
        }
        return $temp;
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
