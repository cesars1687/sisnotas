<?php
class Prueba extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function cargar()
    {
        if (isset($_POST['submit'])) {
             echo 'entro';
            $this->load->library('upload');

            if (!empty($_FILES['userfile']['name'])) {
                // Specify configuration for File 1
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'txt';
                $config['max_size'] = '100';

                // Initialize config for File 1
                $this->upload->initialize($config);

                // Upload file 1
                if ($this->upload->do_upload('userfile')) {
                    $data = $this->upload->data();
                    $file = $_FILES['userfile']['name'];
                    $this->load->model('alumno_model');
                    $gestor = @fopen(base_url() . 'uploads/' . $file, "r");

                    if ($gestor) {
                        while (($cadena = fgets($gestor, 4096)) !== false) {

                            $nombre = strtok($cadena, ' ');
                            $apellido = strtok(' ');
                            $codigo = strtok(' ');

                            $data = array(
                                'alu_nombres' => $nombre,
                                'alu_apellidos' => $apellido,
                                'alu_codigo' => $codigo,
                                'Usuarios_idUsuarios' => 2
                            );
                            $this->alumno_model->registrar($data);

                        }
                        if (!feof($gestor)) {
                            echo "Error: fallo inesperado de fgets()\n";
                        }
                        fclose($gestor);
                    }
                } else {
                    echo $this->upload->display_errors();
                }

            }else{
                  echo 'no se pudo cargar';
            }

            /*$sección = file_get_contents(base_url().'media/file/gente.txt', NULL, NULL);
            var_dump($sección);
              */

        }
        else{
            echo 'no submit';
        }

    }

}