<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Logout extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('inicio/login_model');
    }
    
    function _validaracceso() {
        $logeado = $this->session->userdata('logeado');
        $nidusuario = $this->session->userdata('ssnidusuario');
        
        if ($logeado != true OR $nidusuario = null ) {
            redirect(URL_MAIN);
        }
    }
    
    function index() {
        
        $this->login_model->da_cerrarsesion($this->session->userdata('ssnidusuario'),$this->session->userdata('ssidaudit'));
        
        $this->session->sess_destroy();
        redirect(URL_MAIN);
    }
    
}