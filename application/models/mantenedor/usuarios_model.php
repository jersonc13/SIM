<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function da_listarUsuarios( $accion = 'qry_usuarios', $codUser = 0) {
        $instruccion = "CALL sim_sp_qry_usuarios ('".$accion."', ".$codUser.");";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }

    function da_existeusuario($nPerId) {
        $instruccion = "CALL sim_sp_qry_usuarios('qry_usuarioxper','" . $nPerId . "');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

    function da_getCodUser($nperid) {
        $instruccion = "CALL sim_sp_qry_usuarios ('qry_idUserByCodPerson','" . $nperid . "');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array()[0]['nidusuario']);
        } else {
            return 0;
        }
    }

    function da_listarRoles() {
        $instruccion = "CALL sim_sp_qry_cargarroles ('qry_rolesall','');";

        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

    function da_registrarUsuarios($txtusuario, $txtcontrasena, $txtnperid) {
        $instruccion = "CALL sim_sp_ins_usuarios('ins_usuarios','" . $txtusuario . "','" . $txtcontrasena . "','" . $txtnperid . "');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

    function dblistarpersonas($txtPersona) {
        $instruccion = "CALL sim_sp_qry_usuarios ('qry_persona','" . $txtPersona . "');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }

    function da_estadoUsuarios($nidvalor) {

        $instruccion = "CALL sim_sp_upd_usuario ('upd_estadoUsu','" . $nidvalor . "','','','');";

        $query = $this->db->query($instruccion);
        $this->db->close();

        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

    function dbeditarArea($nidganadores) {

        $instruccion = "CALL SP_S_Ganadores ('edt_ganadores','" . $nidganadores . "');";

        $query = $this->db->query($instruccion);
        $this->db->close();

        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

    function dblistarareaxid($txtbuscarArea) {
        $instruccion = "CALL sim_sp_qry_areas ('qry_areasxid','" . $txtbuscarArea . "');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }

    public function editar( $data, $id ){

        $this->db->where('nidusuario', $id);
        $query = $this->db->update('sim_usuario', $data);

        if( $query){
            return true;
        }else{
            return false;
        }
    }

}

?>