<?php
class Alumno extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
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
       /*config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        $this->load->library('upload', $config);
        echo $_POST['nombres'];
        echo $_FILES['userfile']['name'];
        //$this->upload->do_upload('userfile');
        $data = array('upload_data' => $this->upload->data());
        $foto = 'foto';
        print_r($data);
        if (!$this->upload->do_upload()) {
            //$error =  $this->upload->display_errors();
            // $array_foto = $this->user_model->getUser_foto($id_user);
            //$this->load->view('foto_user', array('error'=>$error, 'foto'=>' ', 'id_user'=>$id_user, 'array_foto'=>$array_foto));
            echo 'error';
        } /*else {

            //$data = $this->upload->data();
            //$foto = $data['file_name'];
            //$this->user_model->insert_foto($foto,$id_user);
            //$array_foto = $this->user_model->getUser_foto($id_user);
            //$this->load->view('foto_user', array('error'=>' ', 'foto'=>$foto,'id_user'=>$id_user ,'array_foto'=>$array_foto));
            //redirect('upload');


        }         */
        $data = array(
            'alu_nombres' => $this->input->post('nombres'),
            'alu_apellidos' => $this->input->post('apellidos'),
            'alu_codigo'=> $this->input->post('codigo'),
            'usuarios_idUsuarios'=>2
        );
        $this->alumno_model->registrar($data);
        redirect('alumno/registrar_alumno', 'refresh');

    }
    function  editar_alumno(){

        $this->load->model('alumno_model');
        $id_alumno = $this->input->get('id');


        $dato['alumno'] = $this->alumno_model->alumno($id_alumno);

        //$this->db->update('alumnos',array('idAlumnos'=>$id_alumno));
        //redirect('alumno/listar_alumno');
        $data['menu'] = $this->load->view('admin/menu_admin','',true);
        $data['content']=$this->load->view('admin/registrar_alumno',$dato,true);
        $this->load->view('admin/encabezado',$data);
    }
    function form_editar_alumno(){
        $this->load->model('alumno_model');
        $id_alumno = $this->input->get('id');
        echo $id_alumno;
        $data = array(
                'alu_nombres'=>$this->input->post('nombres'),
                'alu_apellidos'=> $this->input->post('apellidos'),
                'alu_codigo'=>$this->input->post('codigo')

        );
        $this->db->where('idAlumnos',$id_alumno);
        $this->db->update('alumnos',$data);
        redirect('alumno/listar_alumno');
    }
    function eliminar_alumno(){

        $id_alumno = $_GET['id'];

        $this->db->delete('alumnos',array('idAlumnos'=>$id_alumno));
        redirect('alumno/listar_alumno');

    }
    function alumnos_no_asig(){

        $this->load->model('alumno_model');
        $id_asig = $this->input->get('id');
        $dato['alumnos'] = $this->alumno_model->alumnos_no_asig($id_asig);
        $data['menu'] = $this->load->view('admin/menu_admin','',true);
        $dato['id_asig']=$id_asig;
        $data['content']= $this->load->view('admin/alumnos_no_asig',$dato,true);
        $this->load->view('admin/encabezado',$data);

    }

    function registrar_alumno_asig(){

        $this->load->model('alumno_model');
        $id_alumno = $this->input->get('id');
        $id_asig = $this->input->get('id_asig');
        $alumno = $this->alumno_model->alumno($id_alumno);
        $data = array(
                'alu_asi_nota' => 0,
                'asignatura_idAsignatura' => $id_asig,
                'alumnos_idAlumnos'=> $id_alumno

        );
        $this->alumno_model->registrar_alumno_asig($data);
        redirect(base_url()."cursos_abiertos/listar_cursos");
    }

    function reporte_notas(){
        $this->load->library('dompdf_lib');
        $this->load->model('curso_model','',TRUE);
        $this->load->model('alumno_model','',TRUE);
        $nombre = $_GET['nombre'];

        $dato['cursos']= $this->curso_model->listar_cursos_abiertos();
        $dato['notas']=$this->alumno_model->notas($nombre);
        $data['content'] =  $this->load->view('admin/pdf_notas',$dato,true);
        $html = $this->load->view('admin/encabezado',$data,true);


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

        $pdf_filename  = uniqid();

        $this->dompdf_lib->createPDF($html, $pdf_filename, true);
    }

    function cargar_alumnos(){

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
                        redirect(base_url().'alumno/listar_alumno');
                        if (!feof($gestor)) {
                            echo "Error: fallo inesperado de fgets()\n";
                            redirect(base_url().'alumno/listar_alumno');
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