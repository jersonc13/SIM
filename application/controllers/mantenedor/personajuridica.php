<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Personajuridica extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('mantenedor/persona_model');
    }

    function _validaracceso() {
        $logeado = $this->session->userdata('logeado');
        $nidusuario = $this->session->userdata('ssnidusuario');

        if ($logeado != true OR $nidusuario = null) {
            redirect(URL_MAIN);
        }
    }

    function index() {
        $data['listarpersonajuridica'] = $this->persona_model->da_listarpersona('qry_personaJ');
        $data['listarDepartamento'] = $this->persona_model->dblistardepartamento();
        $data['main_content'] = 'mantenedor/personajuridica/panel_view';
        $data['titulo'] = 'Persona Juridica | SIM';
        $this->load->view('master/plantilla_view', $data);
    }

    function registrarPersonaJuridica() {
        // ins_personajuridica
        $validar = $this->persona_model->da_registrarPersona( $tipo_accion = 'ins_personajuridica' ,'', $_POST['txtnombres'],$_POST['tipo_documento'], $_POST['txtdniruc'], '',$_POST['phone'], $_POST['operador'],'', '0', $_POST['address'], $_POST['cbo_departamento'], $_POST['cbo_provincia'], $_POST['cbo_distrito'], $_POST['txtlatitud'], $_POST['txtlongitud']);

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

    function listarPersonas() {

        $data['listarpersonajuridica'] = $this->persona_model->da_listarpersona('qry_personaJ');
        $this->load->view('mantenedor/personajuridica/qry_view', $data);
    }

    function editarArea() {
        $nidarea = $_POST['nidarea'];
        $data['editarArea'] = $this->area_model->dbeditarArea($nidarea);
        $this->load->view('mante/area/upd_view', $data);
    }

    function buscarDNI() {
        $txtDetalleDNI = $_POST['txtDetalleDNI'];
        $data['listarDepartamento'] = $this->persona_model->dblistardepartamento();
        $data['listarRoles'] = $this->persona_model->dblistarroles();
        $this->load->view('mantenedor/personajuridica/personadetalle_view', $data);
    }

    function cargarprovincia() {
        $idDepartamento = $_POST['idDepartamento'];
        $data['listarProvincia'] = $this->persona_model->dblistarprovincia($idDepartamento);
//        print_r($data['listarProvincia']);
        $combo = "<select id='cbo_provincia' name='cbo_provincia' class='form-control' onchange='cargarDistrito()'>
            <option value='' disabled='true' selected='true'>Seleccione</option>";
        foreach ($data['listarProvincia'] as $key => $listar) {
            $combo .= "<option value=" . $listar['idProv'] . ">" . $listar['provincia'] . "</option>";
        }
        $combo .= "</select>";
        echo $combo;
    }

    function cargardistrito() {
        $idProvincia = $_POST['idProvincia'];
        $data['listarDistrito'] = $this->persona_model->dblistardistrito($idProvincia);
//        print_r($data['listarDistrito']);
        $comboDistrito = "<select id='cbo_distrito' name='cbo_distrito' class='form-control'>
            <option value='' disabled='true' selected='true'>Seleccione</option>";
        foreach ($data['listarDistrito'] as $key => $listar) {
            $comboDistrito .= "<option value=" . $listar['idDist'] . ">" . $listar['distrito'] . "</option>";
        }
        $comboDistrito .= "</select>";
        echo $comboDistrito;
    }

    function estadoPersona() {
        $nidvalor = $_POST['nidvalor'];
        $validar = $this->persona_model->da_estadopersona($nidvalor);

        if ($validar) {
            echo $validar['msg'];
        } else {
            echo $validar['msg'];
        }
    }

}
