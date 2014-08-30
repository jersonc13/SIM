<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inicio extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->_validaracceso();
    }
    
    function _validaracceso() {
        $logeado = $this->session->userdata('logeado');
        $nidusuario = $this->session->userdata('ssnidusuario');              
        
        if ($logeado != true OR $nidusuario = null ) {
            redirect(URL_MAIN);
        }
    }
    
    function index() {
        
        $data['main_content'] = 'dashboard/panel_view';                       
        $data['titulo'] = 'Administracion | SIM';        
        $this->load->view('master/plantilla_view', $data);
        
    }
       
}