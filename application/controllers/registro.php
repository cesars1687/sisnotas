<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Manuel
 * Date: 10/11/12
 * Time: 08:32 PM
 * To change this template use File | Settings | File Templates.
 */
class Registro extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

    }
    function registrar_profesores(){
        $this->load->model('profesor_model');
        //mostrar asignaturas
    }
    function cambiar_password(){

    }

}
