<?php

class Profesor extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
        if(!$this->session->userdata('rol')==3){
            redirect(base_url().'login_admin','refresh');
        }
        $this->load->helper(array('form','url'));
        $this->load->library('upload');
        $this->load->helper('download');
        $this->load->model('profesor_model');



    }
    function index(){
        redirect('profesor/asignaturas', 'refresh');
    }
    function asignaturas(){
        $this->load->model('profesor_model');
        $asignaturas=$this->profesor_model->ver_asignaturas(1);
        $data_asi['asignaturas']=$asignaturas;
        $data['menu'] = $this->load->view('admin/profesor/menu_profesor', '', true);
        $data['content'] = $this->load->view('admin/profesor/ver_asignaturas', $data_asi, true);
        $this->load->view('admin/profesor/cuerpo', $data);
    }
    function alumnos_asistencia(){
        $asignatura=$_GET['asignatura'];

        $this->load->model('profesor_model');
        $alumnos['alumnos']=$this->profesor_model->ver_alumnos($asignatura);
        $alumnos['asignatura']=$asignatura;
        $data['menu'] = $this->load->view('admin/profesor/menu_profesor', '', true);
        $data['content'] = $this->load->view('admin/profesor/tomar_asistencia', $alumnos, true);
        $this->load->view('admin/profesor/cuerpo', $data);
    }
    function ver_asistencias(){
        $asignatura=$_GET['asignatura'];
        $this->load->model('profesor_model');
        $data1['asistencias']=$this->profesor_model->ver_alumnos_asistencia($asignatura);
        $data['menu'] = $this->load->view('admin/profesor/menu_profesor', '', true);
        $data['content'] = $this->load->view('admin/profesor/ver_asistencias', $data1, true);
        $this->load->view('admin/profesor/cuerpo', $data);
    }
    function ver_notas(){
        $asignatura=$_GET['asignatura'];

        $this->load->model('profesor_model');
        $alumnos['alumnos']=$this->profesor_model->ver_alumnos($asignatura);
        $alumnos['asignatura']=$asignatura;
        $data['menu'] = $this->load->view('admin/profesor/menu_profesor', '', true);
        $data['content'] = $this->load->view('admin/profesor/ver_notas', $alumnos, true);
        $this->load->view('admin/profesor/cuerpo', $data);
    }
    function registrar_notas(){
        $this->load->model('profesor_model');
        $asignatura=$_POST['asignatura'];
        $alumnos=$this->profesor_model->ver_alumnos($asignatura);

        foreach($alumnos as $alumno){
            if(isset($_POST["id".$alumno->idAlumnos])){
                if($_POST["id".$alumno->idAlumnos]){
                    $nota=ceil($_POST["id".$alumno->idAlumnos]);
                    $this->profesor_model->registrar_nota($alumno->idAlu_asi,$nota);
                }
            }
        }
        redirect('profesor/asignaturas', 'refresh');
    }
    function tomar_asistencia(){
        $this->load->model('profesor_model');
        $asignatura=$_POST['asignatura'];
        $alumnos=$this->profesor_model->ver_alumnos($asignatura);
        $fecha=date('Y-m-d');
        foreach($alumnos as $alumno){
            if(isset($_POST["id".$alumno->idAlumnos])){

                $this->profesor_model->guardar_asistencia($alumno->idAlu_asi,$fecha,true);
            }else{

                $this->profesor_model->guardar_asistencia($alumno->idAlu_asi,$fecha,false);
            }

        }
        redirect('profesor/asignaturas', 'refresh');

    }
    function generar_excel(){
        $asignatura=$_GET['asignatura'];
        $asignaturan=$_GET['asignatura_nombre'];
        $alumnos=$this->profesor_model->ver_alumnos($asignatura);
        $this->load->library('excel');//Panggil Library Excel

        $xl=$this->excel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Reporte de Notas de la asignatura: '.$asignaturan)
            ->setCellValue('A3', 'Nombres ')
            ->setCellValue('B3', 'Nota');

        $i=4;
        foreach($alumnos as $alumno){
            $xl->setCellValue('A'.$i, ' '.$alumno->alu_nombres)
            ->setCellValue('B'.$i, ' '.$alumno->alu_asi_nota);
            $i++;
        }
        $this->excel->getActiveSheet()->setTitle('Notas '.$asignatura);

        $this->excel->setActiveSheetIndex(0);

        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');
        $objWriter->save("media/notas.xls");
        $data = file_get_contents("media/notas.xls"); // Read the file's contents
        $name = 'notas.xls';

        force_download($name, $data);
    }

}
