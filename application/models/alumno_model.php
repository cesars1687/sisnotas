<?php
class Alumno_model extends CI_Model
{
    function registrar($foto)
    {

        $data = array(
            'alu_nombres' => $this->input->post('nombres'),
            'alu_apellidos' => $this->input->post('apellidos'),
            'alu_foto' => $foto
        );

        $this->db->insert('alumnos', $data);
    }

    function notas($nombre)
    {

        return $this->db->query('select cursos.*,asignatura.*,alumnos.*alu_asi.alu_asi_nota from cursos,asignatura,alumnos,alu_asi,curso_abierto where (alumnos.alu_nombres ="' . $nombre . '"  or alumnos.alu_apellidos ="' . $nombre . '")
                                 and alu_asi.alumnos_idAlumnos = alumnos.idAlumnos and alu_asi.asignatura_idAsignatura = asignatura.idAsignatura and asignatura.curso_abierto_idCurso_abierto = curso_abierto.idCurso_abierto and cursos.idCursos = curso_abierto.idCurso_abierto')->result();
    }
}