<?php
class Alumno_model extends CI_Model
{
    function registrar($foto)
    {

        $data = array(
            'alu_nombres' => $this->input->post('nombres'),
            'alu_apellidos' =>$this->input->post('apellidos') ,
            'alu_foto' => $foto
        );

        $this->db->insert('alumnos', $data);
    }
    function getall(){


    }
}