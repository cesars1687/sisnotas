<?php
class Alumno_model extends CI_Model
{
    function registrar($data)
    {
        $this->db->insert('alumnos', $data);
    }

    function alumno($id_alumno)
    {
        return $this->db->query('select * from alumnos where idAlumnos = ' . $id_alumno . '')->result();

    }

    function notas($nombre)
    {

        return $this->db->query('select cursos.*,asignatura.*,alumnos.*,alu_asi.alu_asi_nota from cursos,asignatura,alumnos,alu_asi,curso_abierto where (alumnos.alu_nombres ="' . $nombre . '"  or alumnos.alu_apellidos ="' . $nombre . '")
                                 and alu_asi.alumnos_idAlumnos = alumnos.idAlumnos and alu_asi.asignatura_idAsignatura = asignatura.idAsignatura and asignatura.curso_abierto_idCurso_abierto = curso_abierto.idCurso_abierto and cursos.idCursos = curso_abierto.idCurso_abierto')->result();
    }

    function alumnos_no_asig($id_asi)
    {
        return $this->db->query('select * from alumnos where alumnos.alu_nombres not in
                                 (select alumnos.alu_nombres from asignatura,alumnos,alu_asi where alu_asi.asignatura_idAsignatura = asignatura.idAsignatura and asignatura.idAsignatura = '.$id_asi.' and alu_asi.alumnos_idAlumnos = alumnos.idAlumnos) ')->result();
    }

    function registrar_alumno_asig($data){

        $this->db->insert('alu_asi',$data);

    }
}