<?php

class Cursos_abiertos extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('rol')==1){
            redirect(base_url().'login_admin','refresh');
        }
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->helper('download');
        $this->load->model('curso_model', '', true);

    }

    function listar_cursos_abiertos()
    {

        $this->load->model('alumno_model', '', true);
        $data['menu'] = $this->load->view('admin/menu_admin', '', true);
        $cursos_abiertos['cursos'] = $this->curso_model->listar_cursos_abiertos();
        //$cursos_abiertos['asignaturas'] = $this->curso_model->asignaturas();

        $data['content'] = $this->load->view('admin/listar_cursos_abiertos', $cursos_abiertos, true);
        $this->load->view('admin/encabezado', $data);

        // $this->load->view('admin/footer');

    }

    function listar_cursos_alumnos()
    {
        $this->load->model('curso_model', '', true);
        $data['menu'] = $this->load->view('admin/menu_admin', '', true);
        $asignaturas = array();
        $alumnos = array();
        $cursos_abiertos = $this->curso_model->listar_cursos_abiertos();
        if (isset($_GET['curso']) && isset($_GET['asig'])) {
            $alumnos = $this->curso_model->listar_alumnos_cursos($_GET['curso'], $_GET['asig']);
            $asignaturas = $this->curso_model->listar_asignaturas($_GET['curso']);
        } else if (isset($_GET['curso'])) {
            $asignaturas = $this->curso_model->listar_asignaturas($_GET['curso']);
        }
        $data1['alumnos'] = $alumnos;
        $data1['asignaturas'] = $asignaturas;
        $data1['cursos'] = $cursos_abiertos;
        $data['content'] = $this->load->view('admin/listar_cursos_alumnos', $data1, true);

        $this->load->view('admin/encabezado', $data);
    }

    function listar_cursos()
    {
        $this->load->model('curso_model');
        $curso = $_POST['curso'];
        if (isset($curso)) {

            $dato['cursos'] = $this->curso_model->listar_cursos_abiertos();
            $dato['asignaturas'] = $this->curso_model->listar_asignaturas($curso);

            $data['content'] = $this->load->view('admin/listar_cursos_abiertos', $dato, true);
            $data['menu'] = $this->load->view('admin/menu_admin', '', true);
            $this->load->view('admin/encabezado', $data);

        } else {
            $dato['cursos'] = $this->curso_model->listar_cursos_abiertos();
            $data['content'] = $this->load->view('admin/listar_cursos_abiertos', $dato, true);
            $data['menu'] = $this->load->view('admin/menu_admin', '', true);
            $this->load->view('admin/encabezado', $data);


        }
        function registrar_alumno()
        {
            $dato['reg_alu'] = $this->load->view('admin/registrar_alumno');
            $data['content'] = $this->load->view('admin/listar_cursos', $dato, true);
            $data['menu'] = $this->load->view('admin/menu_admin', '', true);
        }


    }
}