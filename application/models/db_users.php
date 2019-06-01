<?php
class db_users extends CI_Model { 

    function __construct(){
        parent::__construct();
    }

    /* Obtención de datos
    ------------------------------------------------------------------------------ */

    function login($user){
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('idUsuario', $user);
        $this->db->limit(1);

        $query = $this->db->get();
        return ($query->num_rows() == 1) ? $query->row_array() : false;
    }
}