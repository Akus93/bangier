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
        if ($this->session->userdata('name') != '') {
            $this->account();
        }
        else {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('name', 'Username', 'trim|required|min_length[4]|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]|md5');

        if($this->form_validation->run() == FALSE) {
          
           $this->load->view('bangier/template/header');
           $this->load->view('bangier/login');
           $this->load->view('bangier/template/footer');
        }
        else {
            $password = $this->input->post('password');
            $name = $this->input->post('name');
            $session_data = $this->User_model->login($name, $password);

            if (count($session_data) != 0 ) {
                $this->session->set_userdata($session_data);
                echo 'Udalo sie zalogowac';
            } else {
                echo 'Zla nazwa lub haslo';
            }
        }
    }
}
    
    public function signup() {
        if ($this->session->userdata('name') == '') {
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('name', 'Username', 'trim|required|min_length[4]|xss_clean');
        $this->form_validation->set_rules('email', 'Email adress', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]|md5');
        $this->form_validation->set_rules('con_password', 'Password confirmation', 'trim|required|matches[password]');
        
        if($this->form_validation->run() == FALSE) {
            
            $this->load->view('bangier/template/header');
            $this->load->view('bangier/signup');
            $this->load->view('bangier/template/footer');
         }
        else {
          $name = $this->input->post('name');
          $password = $this->input->post('password');
          $email = $this->input->post('email');
         
          if($this->User_model->signup($name, $password, $email)) {
              $this->success();
          }
            else {
                echo 'Podany login lub email jest juz zajety!';
            }
         }
        }
        else
            $this->account();
       
    }
    
    public function account() {
        if ($this->session->userdata('name') != '') {
            $data['title'] = "My account";
            $data['name'] = $this->session->userdata('name');
            $data['email'] = $this->session->userdata('email');
            $data['date'] = $this->session->userdata('date');

            $this->load->view('bangier/template/header', $data);
            $this->load->view('bangier/account', $data);
            $this->load->view('bangier/template/footer');
        }
        else
            $this->login();

    }
    
    public function success(){
            $this->load->view('bangier/template/header');
            $this->load->view('bangier/success');
            $this->load->view('bangier/template/footer');
    }
    
    public function logout() {
        //$this->session->unset_userdata('name');
        $this->session->sess_destroy();
        echo "wylogowano";
    }
    
}
