<?php

class Home extends CI_Controller {
    public function index() {
        $this->load->view('bangier/template/header');
        $this->load->view('bangier/home');
        $this->load->view('bangier/template/footer');
    }
    
}

