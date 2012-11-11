<?php

Class Admin_model extends CI_Model {

    function login($username, $password) {

        $this->db->select('idUsuarios, usu_usuario, usu_password, usu_rol');
        $this->db->from('usuarios');
        $this->db->where("usu_usuario = '".$username."'");
        $this->db->where("usu_password ='".$password."'");
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {

            return $query->result();
        } else {

            return false;
        }
    }

}

