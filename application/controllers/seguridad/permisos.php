<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Permisos extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('seguridad/permisos_model');
        $this->load->helper('webService_helper');
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
        $data['main_content'] = 'seguridad/permisos/permisos_view';
        $data['titulo'] = 'Permisos | SIM';
        $this->load->view('master/plantilla_view', $data);
    }

    function buscarPersona() {
        $txtPersona = $_POST['txtPersona'];
        $data['listarPersonas'] = $this->permisos_model->dblistarpersonas($txtPersona);
        $this->load->view('seguridad/permisos/qrypermisos_view', $data);
    }

    public function getPermisos(){
        $pid = $this->input->post('nidvalor');
        $data['pid'] = $pid;
        $modulos = $this->permisos_model->da_cargaropcionp();
        $menuModulo = $this->permisos_model->da_cargaropcionh();
        $modulosAsignados = $this->permisos_model->da_cargaropcionpadre($pid);
        $menusAsignados = $this->permisos_model->da_cargaropcionhijo($pid);
        $this->session->set_userdata('pidx',$pid);
        $temp = array();
        foreach( $modulos as $key => $value ) {
            $temp[$value['nidopcion']]['key'] = $value['nidopcion'];
            $temp[$value['nidopcion']]['title'] = $value['copcion'];
            $temp[$value['nidopcion']]['expand'] = true;
            $temp_menu = array();
            $i=0;
            foreach( $menuModulo as $menuHijos ) {
                if( $value['nidopcion'] == $menuHijos['nidhijo'] ) {
                    if( search_in_array( $menuHijos['nidopcion'], $menusAsignados, 'nidopcion' ) ){
                        $temp_menu[$i]['select'] = true;
                    }
                    $temp_menu[$i]['key'] = $menuHijos['nidopcion'];
                    $temp_menu[$i]['title'] = $menuHijos['copcion'];
                    $i++;
                    $temp[$value['nidopcion']]['isFolder'] = true;
                    $temp[$value['nidopcion']]['children'] = $temp_menu;
                }
            }
        }
        $data['permisos'] = $temp;
        $this->load->view('seguridad/permisos/permisos_qry_view', $data);
    }
    public function setPermisosIns(){
        date_default_timezone_set('America/Lima');
        $this->load->model('mantenedor/usuarios_model');
        $pid = $this->input->post('pid');
        $id = $this->input->post('ids');
        $uid = $this->usuarios_model->da_getCodUser($pid);
        $rpt = $this->permisos_model->da_setopcionUsuario( $uid, $id );
        echo $rpt;    
    }

    function opciones() {
        $nPerId = $_POST['nidvalor'];
        $data['opcionesp'] = $this->permisos_model->da_cargaropcionp();
        $data['opcionesh'] = $this->permisos_model->da_cargaropcionh();
        $data['opcionespadre'] = $this->permisos_model->da_cargaropcionpadre($nPerId);
        $data['opcioneshijo'] = $this->permisos_model->da_cargaropcionhijo($nPerId);
        $this->load->view('seguridad/permisos/menu_view', $data);
    }
    function registrarOpciones() {
        $data = $this->input->post('json');
        $prohibiciones = $data['chk_parametros_prohibiciones'];
        print_r($prohibiciones);

//        $validar = $this->areas_model->da_registrarAreas($_POST['txtAreas'], $_POST['txtAlias'], $_POST['cbo_dependencia']);
//
//        if ($validar) {
//            echo $validar['msg'];
//        } else {
//            echo $validar['msg'];
//        }
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

    function listarAreas() {

        $data['listarAreas'] = $this->areas_model->da_listarAreas();
        $this->load->view('mantenedor/areas/qry_view', $data);
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
