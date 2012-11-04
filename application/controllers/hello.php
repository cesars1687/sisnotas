<?php
class Hello extends CI_Controller
{


    function world()
    {

        echo "Hello CodeIgniter!";

    }


    function user_test()
    {
        /*$all_users = Cursos::all(); // or User:find('all')

        // Find user with id of 3
        $userthree = Cursos::find(1); // or User:find_by_id(3)

        echo $userthree->cur_nombre;
          */
        echo phpinfo();
    }


}
