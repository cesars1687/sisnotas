<?php

class Notas extends CI_Controller{



    function index(){
        $this->load->model('curso_model');
        $dato['cursos']= $this->curso_model->listar_cursos_abiertos();
        $data['menu'] = $this->load->view('admin/menu_admin', '', true);
        $data['content'] = $this->load->view('admin/notas', $dato, true);
        $this->load->view('admin/encabezado', $data);

    }
    function listar_alumno_notas(){
        $nombre = $_GET['nombre'];
        $this->load->model('curso_model','',TRUE);
        $data['cursos']= $this->curso_model->listar_cursos_abiertos();
        $this->load->model('alumno_model','',TRUE);
        $data['notas']=$this->alumno_model->notas($nombre);
        $data['menu'] = $this->load->view('admin/menu_admin', '', true);
        $data['content'] = $this->load->view('admin/notas', $data, true);
        $this->load->view('admin/encabezado', $data);

    }
    function listar_cursos_notas(){
        $this->load->model('curso_model');
        $curso = $_GET['curso'];
        $data['curso_alus']=$this->curso_model->listar_cursos_alumnos($curso);
        $data['menu'] = $this->load->view('admin/menu_admin', '', true);
        $data['content'] = $this->load->view('admin/notas', $data, true);
        $this->load->view('admin/encabezado', $data);


    }


}