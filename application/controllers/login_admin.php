<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_admin extends CI_Controller {


    public function index(){


       $this->load->view('admin/login_admin');
    }
    public function prueba()
    {
        $this->load->view('admin/login_admin');
    }
}