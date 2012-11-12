<?php

class Registro extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('registro_model');
        if($this->session->userdata('rol')!=1){
            redirect('login_admin');
        }
    }
    function guardar_profesor(){
        $usuario=$_POST['usuario'] ;
        $nombre= $_POST['nombres'] ;
        $apellido=   $_POST['apellidos'] ;
        $string = "";
        $num = "0123456789";
        $lm="abcdfghjkmnpqrstvwxyz";
        $lM="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $i = 0;
        while ($i < 2) {
            $char = substr($num, mt_rand(0, strlen($num)-1), 1);
            $string .= $char;
            $i++;
        }
        $i = 0;
        while ($i < 2) {
            $char = substr($lm, mt_rand(0, strlen($lm)-1), 1);
            $string .= $char;
            $i++;
        }
        $i = 0;
        while ($i < 2) {
            $char = substr($lM, mt_rand(0, strlen($lM)-1), 1);
            $string .= $char;
            $i++;
        }
        /*
        $destinatario = $usuario;
        $asunto = "Este mensaje es de prueba";
        $cuerpo = '
            <html>
            <head>
               <title>Usted a sido registrado en el sistema de notas</title>
            </head>
            <body>
            <h1>Sus datos son:</h1>
            <p>
             <ul><li>usurio:'.$usuario.'</li>
             <li>password:'.$string.'</li>
             </ul>
            </p>
            </body>
            </html>
            ';

            //para el envío en formato HTML
                    $headers = "MIME-Version: 1.0\r\n";
                    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

            //dirección del remitente
                    $headers .= "From: Sistema de registro <contacto@kodevian.com>\r\n";



            mail($destinatario,$asunto,$cuerpo,$headers); */
            $password=$string;
            $this->registro_model->registrar_profesor($usuario, $password, $nombre, $apellido);
        redirect('registro/ver_docentes', 'refresh');

    }
    function registrar_profesor(){

        $data['menu'] = $this->load->view('admin/menu_admin', '', true);
        $data['content'] = $this->load->view('admin/registrar_profesor', null, true);
        $this->load->view('admin/encabezado', $data);

    }
    function cambiar_password(){
        $user=$_GET['user'];
        $usuario=$_GET['usuario'];
        $string = "";
        $num = "0123456789";
        $lm="abcdfghjkmnpqrstvwxyz";
        $lM="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $i = 0;
        while ($i < 2) {
            $char = substr($num, mt_rand(0, strlen($num)-1), 1);
            $string .= $char;
            $i++;
        }
        $i = 0;
        while ($i < 2) {
            $char = substr($lm, mt_rand(0, strlen($lm)-1), 1);
            $string .= $char;
            $i++;
        }
        $i = 0;
        while ($i < 2) {
            $char = substr($lM, mt_rand(0, strlen($lM)-1), 1);
            $string .= $char;
            $i++;
        }
        /*ini_set("SMTP",'127.0.0.1');
        ini_set("smtp_port",'25');
        //ini_set("sendmail_from","electro.eureka.store@gmail.com");
        $destinatario = $usuario;
        $destinatario = "manuelriosvega@gmail.com";
        $asunto = "Este mensaje es de prueba";
        $cuerpo = '
            <html>
            <head>
               <title>Sus datos fueron modificados</title>
            </head>
            <body>
            <h1>Sus datos son:</h1>
            <p>
             <ul><li>usurio:'.$usuario.'</li>
             <li>password:'.$string.'</li>
             </ul>
            </p>
            </body>
            </html>
            ';
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        $headers .= "From: Sistema de registro <manuelriosvega@gamil.com>\r\n";
        mail($destinatario,$asunto,$cuerpo,$headers);
        */
        $password=$string;
        echo $password." ".$string;
        $this->registro_model->cambiar_password($user, $password);
        redirect('registro/ver_docentes', 'refresh');
    }
    function ver_docentes(){
        ;
        $profesores=$this->registro_model->traer_profesores();
        $data_pro['profesores']=$profesores;
        $data['menu'] = $this->load->view('admin/menu_admin', '', true);
        $data['content'] = $this->load->view('admin/ver_profesores', $data_pro, true);
        $this->load->view('admin/encabezado', $data);
    }

}
