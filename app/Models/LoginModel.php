<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'email', 'level', 'created_at'];

    public function getData($username, $password)
    {
        return $this->where(['username' => $username, 'password' => $password])->first();
    }
} 


