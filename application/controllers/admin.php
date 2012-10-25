<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * @property mixed form_validation
 */
class Admin extends CI_Controller{

    public function login(){
        $this->load->model('admin_model', '', TRUE);
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

        if ($this->form_validation->run() == FALSE) {
            //Field validation failed.  User redirected to login page
            $this->load->view('admin/login');
        } else {
            //Go to private area

            if(!$this->session->userdata('cesar')){
                redirect('login_admin');
            }
            else{

                redirect('admin/listar_alumno');
            }

        }


    }
    function check_database($password) {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');

        //query the database
        $result = $this->admin_model->login($username, $password);

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'id' => $row->idAdministrador,
                    'username' => $row->adm_usuario
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }
    function logout()
    {
       // $datasession = array('id' => '', 'username' => '');

        //$this->session->unset_userdata($datasession);
        $this->session->sess_destroy();
        redirect('login_admin', 'refresh');
    }

    function registrar_alumno(){

        $data['menu'] = $this->load->view('admin/menu_admin','',true);
        $data['content'] = $this->load->view('admin/registrar_alumno','',true);
        $this->load->view('admin/encabezado',$data);
       // $this->load->view('admin/footer');
    }
    function listar_alumno(){

        $data['menu'] = $this->load->view('admin/menu_admin','',true);
        $data['content'] = $this->load->view('admin/listar_alumno','',true);
        $this->load->view('admin/encabezado',$data);
        // $this->load->view('admin/footer');

    }
    function form_registrar_alumno(){

        $this->load->model('alumno_model','',true);
        $this->alumno_model->registrar();
        redirect('admin/registrar_alumno','refresh');

    }
}