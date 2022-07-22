<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('encryption');
    }

    public function login()
    {
        if ($this->session->userdata('GLOBAL_LOGIN')) {
            redirect('admin');
        }else{
            $this->load->view('auth/login');
        }
    }

    public function register()
    {
        $this->load->view('auth/register');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login', 'refresh');
    }

    public function login_validation()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[300]');

        if ($this->form_validation->run()) {
            $result = $this->User_model->login( $this->input->get_post('email'), $this->input->get_post('password'));

            if (empty($result)) {
                redirect('admin/index', 'refresh');
            } else {
                $data['error'] = $result;
                $this->load->view('auth/login', $data);
            }

        } else {
            $this->load->view('auth/login');
        }
    }

    public function register_validation()
    {
        $this->form_validation->set_rules('full_name', 'Full Name', 'trim|required|min_length[3]|max_length[300]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[300]');
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|min_length[4]|max_length[300]|matches[password]');
        
        if ($this->form_validation->run()) {
     
           $data = [
                'full_name' => $this->input->get_post('full_name'),
                'email'     => $this->input->get_post('email'),
                'password'  => $this->input->get_post('password'),
            ];

            $result = $this->User_model->register($data);

            if (empty($result)) {
                redirect('admin/index', 'refresh');
            } else {
                $data['error'] = $result;
                $this->load->view('auth/register', $data);
            }

        } else {
            $this->load->view('auth/register');
        }
    }
}
