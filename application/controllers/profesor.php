<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Manuel
 * Date: 10/11/12
 * Time: 08:32 PM
 * To change this template use File | Settings | File Templates.
 */
class Profesor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('upload');
        /*if(!$this->session->userdata('logged_in')){
                 redirect('login_admin');
        } */

    }
    function asignaturas(){
        $this->load->model('profesor_model');
        //mostrar asignaturas
    }


}
