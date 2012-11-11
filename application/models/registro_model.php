<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Manuel
 * Date: 11/11/12
 * Time: 10:44 AM
 * To change this template use File | Settings | File Templates.
 */
Class Registro_model extends CI_Model
{
    function traer_profesores(){
        return $this->db->query("select usuarios.* , docentes.*
                                from docentes , usuarios
                                where usuarios.usu_rol=3
                                and docentes.usuarios_idUsuarios=usuarios.idUsuarios")->result();
    }
    function registrar_profesor($usuario, $password, $nombre, $apellido){
        $data = array(
            'usu_usuario' => $usuario,
            'usu_password' => $password,
            'usu_rol' => 3
        );

        $this->db->insert('usuarios', $data);
        $query = $this->db->query("select usuarios.*
                            from usuarios
                            where usuarios.usu_usuario='".$usuario."' and
                                usuarios.usu_password='".$password."'");

        if ($query->num_rows() > 0)
        {
            $row = $query->row();
            $data = array(
                'doc_nombres' => $nombre,
                'doc_apellidos' => $apellido,
                'usuarios_idUsuarios' => $row->idUsuarios
            );

            $this->db->insert('docentes', $data);
        }

    }
    function cambiar_password($id_user, $password){
        $data = array(
            'usu_password' => $password
        );
        $this->db->where('idUsuarios', $id_user);
        $this->db->update('usuarios', $data);
    }
}
