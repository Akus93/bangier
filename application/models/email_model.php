<?php

class Email_model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->library('email');
    }

    public function confirmation($email, $code) {

        $this->email->from('bangier@support.com', 'Bangier');
        $this->email->to($email);

        $this->email->subject('Confirmation email');
        $this->email->message('Click at this link to confirm your account on bangier.com :) '.base_url().'confirmation/'.$code);

        if ($this->email->send()) {
            return 1;
        }
        else {
            return 0;
        }

    }

}