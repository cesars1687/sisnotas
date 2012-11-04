<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @property mixed form_validation
 */
class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('doctrine');
        $this->em = $this->doctrine->em;
    }

    public function login()
    {
        $this->load->model('admin_model', '', TRUE);
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|max_lenght=8');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

        if ($this->form_validation->run() == FALSE) {
            //Field validation failed.  User redirected to login page
            //redirect('login_admin','refresh');
            $this->load->view('admin/login_admin');
        } else {
            //Go to private area
            redirect(base_url().'alumno/listar_alumno','refresh');
        }


    }

    function check_database($password)
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');

        //query the database
        $result = $this->admin_model->login($username, $password);

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'idUsuario' => $row->idUsuarios,
                    'username' => $row->usu_usuario,
                    //'rol'=> $row->usu_rol
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'Invalid username or pass');
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


}