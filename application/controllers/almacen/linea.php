<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Linea extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('almacen/linea_model');
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
        $data['main_content'] = 'almacen/linea/panel_view';
        $data['titulo'] = 'Permisos | SIM';
        $this->load->view('master/plantilla_view', $data);
    }

    function buscarPersona() {
        $txtPersona = $_POST['txtPersona'];
        $data['listarPersonas'] = $this->permisos_model->dblistarpersonas($txtPersona);
        $this->load->view('seguridad/permisos/qrypermisos_view', $data);
    }

    function opciones() {
        $nPerId = $_POST['nidvalor'];
        $data['opcionesp'] = $this->permisos_model->da_cargaropcionp();
        $data['opcionesh'] = $this->permisos_model->da_cargaropcionh();
        $data['opcionespadre'] = $this->permisos_model->da_cargaropcionpadre($nPerId);
        $data['opcioneshijo'] = $this->permisos_model->da_cargaropcionhijo($nPerId);
//        print_r($data);
        $this->load->view('seguridad/permisos/menu_view', $data);
    }

    function registrarLinea() {
        
        $validar = $this->linea_model->da_registrarLinea($_POST['txtLinea'], $_POST['txtAlias']);

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

    function listarLinea() {

        $data['listarLineas'] = $this->linea_model->da_listarLinea();
        $this->load->view('almacen/linea/qry_view', $data);
    }

    function editarArea() {
        $nidarea = $_POST['nidarea'];
        $data['editarArea'] = $this->areas_model->dbeditarArea($nidarea);
        $this->load->view('mante/area/upd_view', $data);
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

    function buscarAreas() {
        $txtbuscarArea = $_POST['txtbuscarArea'];
        $data['listarAreaxId'] = $this->areas_model->dblistarareaxid($txtbuscarArea);
        $data['listarAreas'] = $this->areas_model->da_listarAreas();
        $this->load->view('mantenedor/areas/upd_view', $data);
    }

}
