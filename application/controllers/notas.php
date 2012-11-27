<?php

class Notas extends CI_Controller{


    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('upload');
        $this->load->helper('download');
        $this->load->model('profesor_model');

    }
    function index(){

        $this->load->model('curso_model');
        $dato['cursos']= $this->curso_model->listar_cursos_abiertos();
        $data['menu'] = $this->load->view('admin/menu_admin', '', true);
        $data['content'] = $this->load->view('admin/notas', $dato, true);
        $this->load->view('admin/encabezado', $data);

    }
    function listar_alumno_notas(){

        $nombre = $_GET['nombre'];
        $data['nombre_alu'] = $nombre;
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
        $dato['cursos']= $this->curso_model->listar_cursos_abiertos();
        $dato['curso_alus']=$this->curso_model->listar_cursos_alumnos($curso);
        $data['menu'] = $this->load->view('admin/menu_admin', '', true);
        $data['content'] = $this->load->view('admin/notas', $dato, true);
        $this->load->view('admin/encabezado', $data);
    }

    function listar_cursos_aod(){

        $this->load->model('curso_model');
        $datos['alumnos']=array();
        if(isset($_GET['curso'])){
            $datos['alumnos']=$this->curso_model->listar_cursos_aod($_GET['curso']);
        }
        $datos['cursos']= $this->curso_model->listar_cursos_abiertos();
        $data['menu'] = $this->load->view('admin/menu_admin', '', true);
        $data['content'] = $this->load->view('admin/ver_aprobados', $datos, true);
        $this->load->view('admin/encabezado', $data);

    }
}