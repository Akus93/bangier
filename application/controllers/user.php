<?php

class User extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }
    
    public function index() {
        show_404();

    }
    
    public function login() {
        $name = $this->input->post('name');
        $password = $this->input->post('password');

        if ($this->user_model->login($name, $password)) {
            $session_data = array(
                'name' => $name
            );
            $this->session->set_userdata($session_data);
            echo 'Udalo sie zalogowac';
        }
        else
        {
            echo 'Zla nazwa lub haslo';
        }
        
    }
    
    public function signup() {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('name', 'Username', 'trim|required|min_length[4]|xss_clean');
        $this->form_validation->set_rules('email', 'Email adress', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('con_password', 'Password confirmation', 'trim|required|matches[password]');
        
        if($this->form_validation->run() == FALSE) {
          $this->load->view('bangier/signup');
         }
        else {
          $name = $this->input->post('name');
          $password = $this->input->post('password');
          $email = $this->input->post('email');
         
          $this->user_model->signup($name, $password, $email);
          $this->account();
         }
       
    }
    
    public function account() {
        if ($this->session->userdata('name') != '') {
            $data['title'] = "My account";
            $data['name'] = $this->session->userdata('name');

            $this->load->view('bangier/template/header', $data);
            $this->load->view('bangier/account', $data);
            $this->load->view('bangier/template/footer');
        }
        else echo 'niezalogowany';
    }
    
}
