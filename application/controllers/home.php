<?php

class Home extends CI_Controller {
    
    private function _loadView($data) {
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
        $this->_loadView($data);
    }
    
    public function poczekalnia() {
        $data['objects']=array(
            array(
                'title' => 'Third',
                'text' => 'Third text',
                'author' => 'Akusia'
            ),
            array(
                'title' => 'Third',
                'text' => 'Third text',
                'author' => 'Snafix'
            )
        );
        $this->_loadView($data);
    }
}

