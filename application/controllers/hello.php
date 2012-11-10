<?php
class Hello extends CI_Controller
{
    function world()
    {
        echo "Hello CodeIgniter!";
    }

    function user_test()
    {
        $this->load->spark('php-activerecord/0.0.2');
        /*echo '<pre>';
        var_dump(Alumnos::all());
        exit;                */

    }


}
