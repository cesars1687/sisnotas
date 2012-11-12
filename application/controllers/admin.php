<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }

    public function login()
    {

        $this->load->model('admin_model');

        if($this->check_database($_POST['username'],$_POST['password'])){
            echo $this->session->userdata('rol');
            if($this->session->userdata('rol')==3){
                redirect(base_url().'profesor','refresh');
            }else{
                redirect(base_url().'alumno/listar_alumno','refresh');
            }
        }else{
                redirect(base_url().'login_admin','refresh');
        }


    }

   function check_database($username,$password)
    {

        $result = $this->admin_model->login($username, $password);

        if ($result) {
            $this->session->sess_destroy();
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'idUsuario' => $row->idUsuarios,
                    'username' => $row->usu_usuario,
                    'rol'=> $row->usu_rol
                );
                $this->session->set_userdata('rol',  $row->usu_rol);
                $this->session->set_userdata($sess_array);
            }

            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'Invalido Username o Password');
            return FALSE;
        }
    }


    function logout()
    {

        $this->session->sess_destroy();
        redirect('login_admin', 'refresh');
    }


}