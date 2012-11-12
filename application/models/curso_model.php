<?php
class Curso_model extends CI_Model
{

    function listar_alumnos_cursos($curso = null, $asig = null)
    {
        if ($curso) {
            $idcursoabierto = $curso;
            if ($asig) {
                $idasig = $asig;
                //$idcursoabierto = $asig;
                //$cursos_abiertos['asignaturas'] = $this->db->query('select asignatura.asi_nombre,cursos.cur_nombre from asignatura,curso_abierto,cursos where asignatura.curso_abierto_idCurso_abierto = 2 and cursos.idCursos = 2 and curso_abierto.idCurso_abierto = 2')->result();
                $cursos_abiertos = $this->db->query('select alumnos.alu_nombres from alumnos, alu_asi , asignatura, cursos where asignatura.curso_abierto_idCurso_abierto=' . $idcursoabierto . ' and cursos.idCursos= ' . $idcursoabierto . ' and alu_asi.asignatura_idAsignatura=asignatura.idAsignatura and alu_asi.alumnos_idAlumnos=alumnos.idAlumnos and asignatura.idAsignatura = ' . $idasig)->result();
            } else {
                //$cursos_abiertos['cursos'] = $this->db->query('select cur_nombre,idCursos from curso_abierto, cursos where cursos_idCursos=idCursos;')->result();
                //$cursos_abiertos['asignaturas'] = array('todas');
                $cursos_abiertos = $this->db->query('select alumnos.alu_nombres from alumnos, alu_asi , asignatura, cursos where asignatura.curso_abierto_idCurso_abierto=' . $idcursoabierto . ' and cursos.idCursos= ' . $idcursoabierto . ' and alu_asi.asignatura_idAsignatura=asignatura.idAsignatura and alu_asi.alumnos_idAlumnos=alumnos.idAlumnos;')->result();
            }
            return $cursos_abiertos;
        }
        return array();
    }

    function listar_cursos_abiertos()
    {
        return $this->db->query('select cur_nombre,idCursos,cur_abi_anio,cur_abi_semestre from curso_abierto, cursos where cursos_idCursos=idCursos;')->result();
    }

    function listar_asignaturas($curso)
    {
        return $this->db->query('select asignatura.idAsignatura,asignatura.asi_nombre,cursos.cur_nombre from asignatura,curso_abierto,cursos where asignatura.curso_abierto_idCurso_abierto = ' . $curso . ' and cursos.idCursos = ' . $curso . ' and curso_abierto.idCurso_abierto = ' . $curso)->result();
    }

    function listar_cursos_alumnos($curso)
    {
        return $this->db->query('select cursos.*, asignatura.*,alumnos.*,alu_asi.* from cursos,alumnos,asignatura,curso_abierto,alu_asi
                                           where cursos.cur_nombre = "' . $curso . '" and curso_abierto.idCurso_abierto=cursos.idCursos and alu_asi.asignatura_idAsignatura = asignatura.idAsignatura and alu_asi.alumnos_idAlumnos=alumnos.idAlumnos
                                           and asignatura.curso_abierto_idCurso_abierto=curso_abierto.idCurso_abierto order by asignatura.asi_nombre')->result();
    }

    function listar_cursos_aod($curso){
                         return $this->db->query("select alumnos.* ,alu_asi.* , asignatura.* from alumnos , asignatura, curso_abierto , alu_asi
                            where alu_asi.asignatura_idAsignatura= asignatura.idAsignatura and
                                        alu_asi.alumnos_idAlumnos = alumnos.idAlumnos
                                            and curso_abierto.idCurso_abierto = ".$curso."
                                            and asignatura.curso_abierto_idCurso_abierto = curso_abierto.idCurso_abierto
                            order by alu_codigo")->result();
    }


}