<?php

namespace App\Controllers;

use App\Models\Admin_Model;

class Admin_Controller extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        $a = $this->session->get('username');
        if ($a == null) {
            return redirect()->to(base_url() . 'index.php/Home/login');
        } else {
            $model = new Admin_Model();
            $data['berkas'] = $model->ambil_berkas();
            return view('Admin/index', $data);
        }
    }

    public function create_account()
    {
        return view('Admin/Create_Account');
    }

    public function list_account()
    {
        $model = new Admin_Model();
        $data['user'] = $model->list_user();
        return view('Admin/Account', $data);
    }

    public function buat_akun()
    {
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'level' => 3
        ];

        $model = new Admin_Model();
        $model->new_user($data);
        return redirect()->to(base_url() . 'index.php/Admin_Controller/list_account');
    }
}
