<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();



    }
    public function index(){
       $this->load->view('admin/login_admin');
    }

}