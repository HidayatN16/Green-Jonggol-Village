<?php

namespace App\Models;

use CodeIgniter\Model;

class Login_Model extends Model{
    public function login($data){
        return $this->db->table('user')->where($data)->get();
    }
}
