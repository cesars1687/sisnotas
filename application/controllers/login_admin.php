<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_admin extends CI_Controller {


    public function index(){
       /* if($this->session->userdata('logged_in')){
            redirect('admin/listar_alumno');
        }
        else{
            $this->load->view('admin/login_admin');

        }*/

       $this->load->view('admin/login_admin');
    }
    public function prueba()
    {
        $this->load->view('admin/login_admin');
    }
}