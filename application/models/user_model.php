<?php

class User_model extends CI_Model {
    
    public function login($name, $password) {
        $password = md5($password);
        
        $this->db->where("name", $name);
        $this->db->where("password", $password);
        
        $query = $this->db->query('SELECT id,name,email,data,confirmed,rank FROM users WHERE name='.$name.' and password='.$password.' LIMIT 1');
        
        if( $query->row() ) {
            return $query->row();
        }
        else {
            return false;
        }
    }
    
    public function signup($name, $password, $email) {
        $password = md5($password);
        $date = date('Y-m-d H:i:s');
        
        $data = array (
            'name' => $name,
            'password' => $password,
            'email' => $email,
            'date' => $date
        );
        
        $this->db->insert('users',$data);
        
    }
    
}

