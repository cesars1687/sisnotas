<?php

Class Admin_model extends CI_Model {

    function login($username, $password) {
        $this->db->select('idAdministrador, adm_usuario, adm_pass');
        $this->db->from('administrador');
        $this->db->where('adm_usuario = ' . "'" . $username . "'");
        $this->db->where('adm_pass = ' . "'" . MD5($password) . "'");
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}

