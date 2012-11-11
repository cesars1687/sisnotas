<?php

Class Profesor_model extends CI_Model {

    function registrar_nota($alu_asi, $nota){
        $data = array(
            'alu_asi_nota' => $nota,
        );

        $this->db->where('idAlu_asi', $alu_asi);
        $this->db->update('alu_asi', $data);
    }
    function ver_asignaturas($profesor){
        return $this->db->query("select asignatura.*
                                 from asignatura , doc_asi, docentes
                                 where docentes.idDocentes=".$profesor."
                                        and docentes.idDocentes=doc_asi.docentes_idDocentes
                                        and doc_asi.asignatura_idAsignatura=asignatura.idAsignatura")->result();
    }
    function ver_alumnos($asignatura){
        return $this->db->query("select alumnos.* , alu_asi.*
                                    from alu_asi , alumnos
                                    where alu_asi.asignatura_idAsignatura=".$asignatura."
                                    and
                                    alu_asi.alumnos_idAlumnos=alumnos.idAlumnos")->result();
    }
    function guardar_asistencia($alu_asi,$fecha,$asistio){
        $data = array(
            'asi_asistio' => $asistio,
            'asi_fecha' => $fecha,
            'alu_asi_idAlu_asi' => $alu_asi
        );

        $this->db->insert('asistencia', $data);
    }
    function  ver_alumnos_asistencia($asignatura){
        return $this->db->query("select asistencia.* , alu_asi.* ,alumnos.* , asignatura.*
                                from alu_asi ,asistencia, alumnos , asignatura
                                where asignatura.idAsignatura=".$asignatura."
                                            and alu_asi.asignatura_idAsignatura=asignatura.idAsignatura
                                                and asistencia.alu_asi_idAlu_asi=alu_asi.idAlu_asi
                                                    and alumnos.idAlumnos = alu_asi.alumnos_idAlumnos
                                order by alu_nombres , asi_fecha ")->result();
    }


}