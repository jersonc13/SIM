<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('inicio/login_model');        
    }

    public function index() {
        $this->load->view('inicio/login_view');
    }

    public function enviardatos() {
        $txt_usuario = trim($_POST['txt_usuario']);
        $txt_contrasena = trim($_POST['txt_contrasena']);

        $result = $this->login_model->da_enviardatos($txt_usuario, $txt_contrasena);
        
        if ($result) {
            $valor = $this->login_model->da_ultimasesion($result['nidusuario']);            
            $sesion_data = array(
                'logeado' => true,
                'ssnidusuario' => $result['nidusuario'],
                'sscusuario' => $result['cusuario'],
                'ssnidpersona' => $result['nidpersona'],
                'sscapellidos' => $result['capellidos'],
                'sscnombres' => $result['cnombres'],
                'ssidaudit' => $valor['idaudit'],
            );
            
            $this->session->set_userdata($sesion_data);
            
            
            echo 1;
            
        } else {
            
            echo 0;
            
        }
    }

}