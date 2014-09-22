<?php

class User_model extends CI_Model {
    
    public function login($name, $password) {

        $query = $this->db->query("SELECT id,name,email,date,confirmed,rank FROM users WHERE name='".$name."' and password='".$password."' LIMIT 1");
        
        if( $query->row() ) {
            return $query->row();
        }
        else {
            return false;
        }
    }
    
    public function signup($name, $password, $email) {
        $this->load->model('Email_model');

        $query = $this->db->query("SELECT id FROM users WHERE name='".$name."' or email='".$email."' LIMIT 1");
        if( $query->row() ) {
            return 0;
        }
        else {

            $date = date('Y-m-d H:i:s');

            $code = md5(microtime());

            $data = array(
                'name' => $name,
                'password' => $password,
                'email' => $email,
                'date' => $date,
                'confirmed' => $code
            );

            if($this->Email_model->confirmation($email, $code)) {
                $this->db->insert('users', $data);
                return 1;
            }
            else echo "Blad z wyslaniem emaila";

        }
    }
    
}

