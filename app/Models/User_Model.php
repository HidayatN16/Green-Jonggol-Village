<?php

namespace App\Models;

use CodeIgniter\Model;

class User_Model extends Model{
    public function id_check($data){
        return $this->db->table('user')->where($data)->get();
    }
    
    public function berkas_check($data){
        return $this->db->table('berkas')->getWhere($data)->getResult();
    }

    public function submit_id($data,$id){
        return $this->db->table('user')->update($data,$id);
    }

    public function submit_berkas($data,$id){
        return $this->db->table('berkas')->update($data,$id);
    }

    public function add_field_berkas($data){
        return $this->db->table('berkas')->insert($data);
    }
}
