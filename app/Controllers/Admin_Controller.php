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
        $model = new Admin_Model();
        $data['berkas'] = $model->ambil_berkas();
        return view('Admin/index', $data);
    }

    public function create_account(){
        return view('');
    }
}
