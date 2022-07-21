<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('GLOBAL_LOGIN')) {
            redirect('auth/login');
        }
        $this->load->library('grocery_CRUD');
    }

    public function index()
    {
        $this->load->view('admin/index');
    }

    public function users()
    {
        $crud = new grocery_CRUD();
        $crud->set_theme('datatables');
        $crud->set_table('users');
        $crud->set_subject('User');
        $crud->columns('id', 'full_name', 'email', 'role');
        $crud->fields('id', 'full_name', 'email', 'role');
        $crud->edit_fields('full_name');
        $crud->unset_add();
        $output = $crud->render();
        $this->_example_output($output);
    }

    public function _example_output($output = null)
    {
        $this->load->view('admin/grocery', (array)$output);
    }
}
