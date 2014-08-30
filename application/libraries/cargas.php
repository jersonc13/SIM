<?php
session_start();
class Cargas {
   
    //Crear menu de opciones por tipo de opciones
    public function cargarroles() {
        $CI = & get_instance();
        $CI->load->model('dashboard/menu_model','cargarroles');
        return $CI->cargarroles->da_cargarroles();
    }
    
    public function cargaropcionpadre() {
        $CI = & get_instance();
        $CI->load->model('dashboard/menu_model','cargaropcionpadre');
        return $CI->cargaropcionpadre->da_cargaropcionpadre();
    }
    
    public function cargaropcionhijo() {
        $CI = & get_instance();
        $CI->load->model('dashboard/menu_model','cargaropcionhijo');
        return $CI->cargaropcionhijo->da_cargaropcionhijo();
    }
    
    public function validarpermisos() {
        $CI = & get_instance();
        $CI->load->model('dashboard/menu_model','validarpermisos');
        $url1 = $CI->uri->segment(1);
        $url2 = $CI->uri->segment(1).'/' . $CI->uri->segment(2);
        $data = array('url1' => $url1,'url2'=>$url2);
        $CI->session->set_userdata($data);
        return $CI->validarpermisos->validarpermisos();
    }
}
