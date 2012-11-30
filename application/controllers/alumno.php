<?php
class Alumno extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
        if(!$this->session->userdata('rol')==1){
            redirect(base_url().'login_admin','refresh');
        }
        else{

        }
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->helper('download');
        $this->load->model('profesor_model');
        $this->load->library('session');


    }

    function registrar_alumno()
    {

        $data['menu'] = $this->load->view('admin/menu_admin', '', true);
        $data['content'] = $this->load->view('admin/registrar_alumno', '', true);
        $this->load->view('admin/encabezado', $data);
        // $this->load->view('admin/footer');
    }

    function listar_alumno()
    {

        $this->load->model('alumno_model', '', true);
        $data['menu'] = $this->load->view('admin/menu_admin', '', true);
        $alumnos['alumnos'] = $this->db->get('alumnos')->result();
        $data['content'] = $this->load->view('admin/listar_alumno', $alumnos, true);
        $this->load->view('admin/encabezado', $data);
        // $this->load->view('admin/footer');

    }

    function form_registrar_alumno()
    {

        $this->load->model('alumno_model', '', true);
        $this->load->library('upload');
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '1000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $this->upload->initialize($config);


        if ( ! $this->upload->do_upload('userfile'))
        {   echo 'error';
            $error = array('error' => $this->upload->display_errors());


        }
        else
        {
            $data = $this->upload->data();
        }


        $data = array(
            'alu_nombres' => $this->input->post('nombres'),
            'alu_apellidos' => $this->input->post('apellidos'),
            'alu_codigo' => $this->input->post('codigo'),
            'usuarios_idUsuarios' => 2 ,
            'alu_foto'=> base_url().'uploads/'.$data['file_name']
        );
        $this->alumno_model->registrar($data);
        redirect('alumno/registrar_alumno', 'refresh');

    }

    function  editar_alumno()
    {

        $this->load->model('alumno_model');
        $id_alumno = $this->input->get('id');


        $dato['alumno'] = $this->alumno_model->alumno($id_alumno);

        //$this->db->update('alumnos',array('idAlumnos'=>$id_alumno));
        //redirect('alumno/listar_alumno');
        $data['menu'] = $this->load->view('admin/menu_admin', '', true);
        $data['content'] = $this->load->view('admin/registrar_alumno', $dato, true);
        $this->load->view('admin/encabezado', $data);
    }

    function form_editar_alumno()
    {
        $this->load->model('alumno_model');
        $id_alumno = $this->input->get('id');
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '1000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $this->upload->initialize($config);


        if ( ! $this->upload->do_upload('userfile'))
        {   echo 'error';
            $error = array('error' => $this->upload->display_errors());
        }
        else
        {
            $data = $this->upload->data();
        }

        $data = array(
            'alu_nombres' => $this->input->post('nombres'),
            'alu_apellidos' => $this->input->post('apellidos'),
            'alu_codigo' => $this->input->post('codigo'),
            'alu_foto'=> base_url().'uploads/'. $data['file_name']
        );
        $this->db->where('idAlumnos', $id_alumno);
        $this->db->update('alumnos', $data);
        redirect('alumno/listar_alumno');
    }

    function eliminar_alumno()
    {

        $id_alumno = $_GET['id'];

        $this->db->delete('alumnos', array('idAlumnos' => $id_alumno));
        redirect('alumno/listar_alumno');

    }

    function alumnos_no_asig()
    {

        $this->load->model('alumno_model');
        $id_asig = $this->input->get('id');
        $dato['alumnos'] = $this->alumno_model->alumnos_no_asig($id_asig);
        $data['menu'] = $this->load->view('admin/menu_admin', '', true);
        $dato['id_asig'] = $id_asig;
        $data['content'] = $this->load->view('admin/alumnos_no_asig', $dato, true);
        $this->load->view('admin/encabezado', $data);

    }

    function registrar_alumno_asig()
    {

        $this->load->model('alumno_model');
        $id_alumno = $this->input->get('id');
        $id_asig = $this->input->get('id_asig');
        $alumno = $this->alumno_model->alumno($id_alumno);
        $data = array(
            'alu_asi_nota' => 0,
            'asignatura_idAsignatura' => $id_asig,
            'alumnos_idAlumnos' => $id_alumno

        );
        $this->alumno_model->registrar_alumno_asig($data);
        redirect(base_url() . "cursos_abiertos/listar_cursos");
    }

    function reporte_notas()
    {
        $this->load->library('dompdf_lib');
        $this->load->model('curso_model', '', TRUE);
        $this->load->model('alumno_model', '', TRUE);
        $nombre = $_GET['nombre'];

        $dato['cursos'] = $this->curso_model->listar_cursos_abiertos();
        $dato['notas'] = $this->alumno_model->notas($nombre);
        $data['content'] = $this->load->view('admin/pdf_notas', $dato, true);
        $html = $this->load->view('admin/encabezado', $data, true);


        /*$html = '<html>
				<head></head>
				<body>
					<h1>HELLO WORLD!</h1>
					<input type="submit" value="boton">
					<a href="#">holaaa</a>
				</body>
				</html>
				';
         */

        $pdf_filename = uniqid();

        $this->dompdf_lib->createPDF($html, $pdf_filename, true);
    }

    function cargar_alumnos()
    {

        if (isset($_POST['submit'])) {

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

                        unlink('uploads/' . $file);
                        redirect(base_url() . 'alumno/listar_alumno');
                        if (!feof($gestor)) {
                            echo "Error: fallo inesperado de fgets()\n";
                            redirect(base_url() . 'alumno/listar_alumno');
                        }
                        fclose($gestor);
                    }
                } else {
                    echo $this->upload->display_errors();
                }

            } else {
                echo 'no se pudo cargar';
            }



        } else {
            echo 'no submit';
        }
    }
}