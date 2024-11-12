<?php
 
namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use App\Models\LoginModel;
 
class LoginController extends ResourceController
{
    public function index()
    {
        $username = 'user123';
        $password = '12345678 ';

 
        $loginModel = new LoginModel();
        $loginSukses = $loginModel->getData($username, $password);
 
        if ($loginSukses) {
            return $this->respond([
                'status' => 200,
                'message' => 'Login Sukses',
                'data' => $loginSukses
            ]);
        } else {
            return $this->failUnauthorized('Login Gagal');
        }
    }
}