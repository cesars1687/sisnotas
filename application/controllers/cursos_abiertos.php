<?php

class Cursos_abiertos extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        /* if(!$this->session->userdata('logged_in')){
             redirect('login_admin');
         }*/


    }

    function listar_cursos_abiertos()
    {

        $this->load->model('alumno_model', '', true);
        $data['menu'] = $this->load->view('admin/menu_admin', '', true);
        //$cursos_abiertos['cursos_abiertos']=$this->db->get('curso_abierto')->result();
        $cursos_abiertos['cursos'] = $this->db->query('select cur_nombre,idCursos from curso_abierto, cursos where cursos_idCursos=idCursos;')->result();
        $cursos_abiertos['asignaturas'] = $this->db->get('asignatura')->result();


        // $cursos_abiertos['cursos']=$this->db->get('cursos')->result();
        // $cursos_abiertos['cursos']=$this->db->get('cursos')->result();


        $data['content'] = $this->load->view('admin/listar_cursos', $cursos_abiertos, true);
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


}