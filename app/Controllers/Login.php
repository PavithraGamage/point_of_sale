<?php

namespace App\Controllers;

use CodeIgniter\CodeIgniter;


class Login extends BaseController
{

    public function index()
    {

        // validation messages
        $data = [];

        $rules = [
            'email' => 'required',
            'password' => 'required',
        ];

        
        if ($this->validate($rules)) {

            echo 'retune to dashboard'; 

        } else {

            $data['validation'] = $this->validator;
        }

        return  view('login/login', $data);
    }

    public function forgot_password()
    {
        return view('login/reset_password');
    }
}
