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
        return view('Admin/index');
    }
}
