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
        $this->load->model('Chatbot_model');
    }

    public function index()
    {
        $this->load->view('admin/chatbot/index');
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

    public function getMessageOrStep()
    {
        $step    = $this->input->get_post('step');
        $message = $this->input->get_post('message');
        $searchChatbot = '';

        if (empty($step)) {
            $result  = $this->Chatbot_model->getAllResponsesHuman();
            $words   = $result;

            foreach ($words as $key => $value) {
                $partials = explode('|', $value->word);

                if (in_array(strtolower($message), $partials)) {
                    $searchChatbot = $value->step;
                    break;
                }
            }
        }else{
            $searchChatbot = $step;
        }

        if (!empty($searchChatbot)) {
            $result = $this->Chatbot_model->getOneChatbot($searchChatbot);
            echo json_encode($result);
        } else {
            $response = ['response' => 'Parece que no tengo respuesta para ello en este momento. Seguiremos mejorando.', 'suggestion' => 'info'];
            echo json_encode($response);
        }
    }
}
