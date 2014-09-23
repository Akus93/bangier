<?php

class Home extends CI_Controller {
    
    private function _load_view($data) {
        $this->load->view('bangier/template/header');
        $this->load->view('bangier/home',$data);
        $this->load->view('bangier/template/footer');
    }
    
    public function index() {
        $data['objects']=array(
            array(
                'title' => 'First',
                'text' => 'First text',
                'author' => 'Akus'
            ),
            array(
                'title' => 'Secound',
                'text' => 'Secound text',
                'author' => 'Nuriel'
            )
        );
        $this->_load_view($data);
    }
    
    public function poczekalnia() {
        $data['objects']=array(
            array(
                'title' => 'Third',
                'text' => 'Third text',
                'author' => 'Akusia'
            ),
            array(
                'title' => 'Fourth',
                'text' => 'Fourth text',
                'author' => 'Snafix'
            )
        );
        $this->_load_view($data);
    }
}

