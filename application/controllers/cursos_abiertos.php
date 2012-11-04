<?php

class Cursos_abiertos extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('upload');
        if(!$this->session->userdata('logged_in')){
            redirect('login_admin');
        }


    }
    function registrar_alumno()
    {

        $data['menu'] = $this->load->view('admin/menu_admin', '', true);
        $data['content'] = $this->load->view('admin/registrar_alumno', '', true);
        $this->load->view('admin/encabezado', $data);
        // $this->load->view('admin/footer');
    }

    function listar_cursos_abiertos()
    {

        $this->load->model('alumno_model', '', true);
        $data['menu'] = $this->load->view('admin/menu_admin', '', true);
        $cursos_abiertos['cursos_abiertos']=$this->db->get('curso_abierto')->result();
       // $cursos_abiertos['cursos']=$this->db->get('cursos')->result();
        $cursos_abiertos['cursos']=$this->db->get('cursos')->result();


        $data['content'] = $this->load->view('admin/listar_cursos', $cursos_abiertos, true);
        $this->load->view('admin/encabezado', $data);

        // $this->load->view('admin/footer');

    }

    function form_registrar_alumno()
    {

        $this->load->model('alumno_model', '', true);
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        $this->load->library('upload', $config);
        echo $_POST['nombres'];
        echo $_FILES['userfile']['name'];
        //$this->upload->do_upload('userfile');
        $data = array('upload_data' => $this->upload->data());
        $foto = 'foto';
        print_r($data);
        if (!$this->upload->do_upload()) {
            //$error =  $this->upload->display_errors();
            // $array_foto = $this->user_model->getUser_foto($id_user);
            //$this->load->view('foto_user', array('error'=>$error, 'foto'=>' ', 'id_user'=>$id_user, 'array_foto'=>$array_foto));
            echo 'error';
        } /*else {

            //$data = $this->upload->data();
            //$foto = $data['file_name'];
            //$this->user_model->insert_foto($foto,$id_user);
            //$array_foto = $this->user_model->getUser_foto($id_user);
            //$this->load->view('foto_user', array('error'=>' ', 'foto'=>$foto,'id_user'=>$id_user ,'array_foto'=>$array_foto));
            //redirect('upload');


        }         */
        $this->alumno_model->registrar($foto);
        redirect('alumno/registrar_alumno', 'refresh');

    }
    function eliminar_alumno(){

        $id_alumno = $_GET['id'];

        $this->db->delete('alumnos',array('idAlumnos'=>$id_alumno));
        redirect('alumno/listar_alumno');

    }


}