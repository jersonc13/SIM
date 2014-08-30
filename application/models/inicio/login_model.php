<?php

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function da_enviardatos($txt_usuario, $txt_contrasena) {
        
        $instruccion = "CALL sim_sp_qyr_validarsesion ('qry_sesion','".$txt_usuario."','".$txt_contrasena."');";
        $this->db->close();
        
        $query = $this->db->query($instruccion);        
        if ($query) {            
            return ($query->row_array());            
        }else{            
            return 0;
        }        
    }
    
    function da_ultimasesion($nidusuario) {
        
        $instruccion = "CALL sim_sp_ins_ultimasesion ('ins_ultsesion','".$nidusuario."','".rand(5, 15)."');";
        $this->db->close();
        
        $query = $this->db->query($instruccion);        
        if ($query) {            
            return ($query->row_array());            
        }else{            
            return 0;
        }        
    }
    
    function da_cerrarsesion($nidusuario,$idaudit) {
        
        $instruccion = "CALL sim_sp_upd_ultimasesion ('upd_cerrarsesion','".$nidusuario."','".$idaudit."');";
        $this->db->close();
        
        $query = $this->db->query($instruccion);        
        if ($query) {            
            return ($query->row_array());            
        }else{            
            return 0;
        }        
    }
    
}
