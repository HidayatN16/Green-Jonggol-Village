<?php

namespace App\Models;

use CodeIgniter\Model;

class Login_Model extends Model{
    public function login($data){
        return $this->db->table('user')->where($data)->get();
    }

    public function find_email($email){
        return $this->db->table('user')->where($email)->get();
    }
}
