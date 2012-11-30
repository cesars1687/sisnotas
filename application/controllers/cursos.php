<?php

class Cursos extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('rol')==1){
            redirect(base_url().'login_admin','refresh');
        }
        $this->load->model('curso_model');

    }

    public function registrar_curso()
    {

        $data['menu'] = $this->load->view('admin/menu_admin', '', true);
        $data['content'] = $this->load->view('admin/registrar_curso', '', true);
        $this->load->view('admin/encabezado', $data);
    }

    public function form_registrar_curso()
    {

        $dato = array(
            'cur_nombre' => $this->input->post('curso'),
            'cur_creditos' => $this->input->post('creditos')
        );
        $this->curso_model->registrar_curso($dato);
        redirect(base_url() . 'cursos/registrar_curso');

    }

    public function listar_cursos()
    {

        $dato['cursos'] = $this->curso_model->listar_cursos();
        $data['content'] = $this->load->view('admin/listar_cursos', $dato, true);
        $data['menu'] = $this->load->view('admin/menu_admin', '', true);
        $this->load->view('admin/encabezado', $data);
    }

    public function eliminar_curso()
    {

        $idCurso = $this->input->get('id');
        $this->curso_model->eliminar_curso($idCurso);
        redirect(base_url() . 'cursos/listar_cursos');

    }

    public function editar_curso()
    {

        $idCurso = $this->input->get('id');
        $curso['curso'] = $this->curso_model->curso($idCurso);
        $data['menu'] = $this->load->view('admin/menu_admin','',true);
        $data['content'] = $this->load->view('admin/registrar_curso', $curso,true);
        $this->load->view('admin/encabezado', $data);

    }

    public function form_editar_curso()
    {

        $idCurso = $this->input->get('id');
        $data = array(
            'cur_nombre' => $this->input->post('curso'),
            'cur_creditos' => $this->input->post('creditos')
        );
        $this->curso_model->editar_curso($idCurso, $data);
        redirect(base_url() . 'cursos/listar_cursos');
    }


}