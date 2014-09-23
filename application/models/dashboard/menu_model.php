<?php

class Menu_model extends CI_Model {

    function __construct() {
        parent::__construct();
        
    }

    function da_cargarroles() {
        
        $instruccion = "CALL sim_sp_qry_cargarroles ('qry_roles','".$this->session->userdata('ssnidpersona')."');";
        $this->db->close();
        
        $query = $this->db->query($instruccion);
        
        if ($query) {
            return ($query->result_array()); 
        } else {
            return 0;
        }
    }
    
    function da_cargaropcionpadre() {
        
        $instruccion = "CALL sim_sp_qry_cargaropciones ('qry_opcpadre','".$this->session->userdata('ssnidusuario')."');";
        $this->db->close();
        $query = $this->db->query($instruccion);
        
        if ($query) {
            return ($query->result_array()); 
        } else {
            return 0;
        }
    }
    
    function da_cargaropcionhijo() {
        
        $instruccion = "CALL sim_sp_qry_cargaropciones ('qry_opchijo','".$this->session->userdata('ssnidusuario')."');";
        $this->db->close();
        $query = $this->db->query($instruccion);
        
        if ($query) {
            return ($query->result_array()); 
        } else {
            return 0;
        }
    }
    
    function validarpermisos (){
        
        echo $this->session->userdata('url1');
        
//        $this->cnsigecom->setParam("validarpermiso");        
//        $this->cnsigecom->setParam($this->session->userdata('url1'));
//        $this->cnsigecom->setParam($this->session->userdata('url2'));
//        $this->cnsigecom->setParam($this->session->userdata('nidusuario'));        
//        $query = $this->cnsigecom->consulta('SP_SGC_S_Opciones');        
//        
//        if ($query) {
//            return $query;
//            
//        } else {
//            
//            redirect(URL_MAINDAS.'index');
//        }
    }
    
}

?>