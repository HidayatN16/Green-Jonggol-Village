<?php

namespace App\Controllers;

use App\Models\Login_Model;

class Login extends BaseController
{

    public function __construct()
    {
    }

    public function Autentikasi()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $data = [
            'username' => $username,
            'password' => $password
        ];

        $this->session->set($data);
        $model = new Login_Model();
        $auth = $model->login($data);

        if ($auth->getNumRows() == 1) {
            $user = $auth->getRow();
            $this->session->set(['iduser' => $user->id_user]);
            if ($user->level == 1) {
                return redirect()->to(base_url() . 'index.php/Admin_Controller/index');
            } elseif ($user->level == 3) {
                return redirect()->to(base_url() . 'index.php/User_Controller/index');
            } else {
                echo 'Error Query or Something';
            }
        } else {
            echo 'Error Login';
        }
    }
    public function logout(){
        $this->session->destroy();
        return redirect()->to(base_url() . 'index.php/Home/login');
    }
}
