<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin_Model extends Model
{
    public function ambil_berkas()
    {
        return $this->db->table('berkas')->join('user', 'user.id_user = berkas.id_user')->get()->getResult();
    }

    public function list_user(){
        return $this->db->table('user')->get()->getResult();
    }

    public function new_user($data){
        return $this->db->table('user')->insert($data);
    }
}
