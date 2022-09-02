<?php

namespace App\Controllers;
use CodeIgniter\CodeIgniter;

class Password_forgot extends BaseController
{
    public function reset_password()
    {
        return view('reset_password');
    }
}
