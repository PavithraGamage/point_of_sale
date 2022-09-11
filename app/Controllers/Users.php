<?php

namespace App\Controllers;

use CodeIgniter\CodeIgniter;

class Users extends BaseController
{

    // add user
    public function add_user()
    {
        return view('add_user');
    }

    // all users
    public function all_users()
    {
        return view('all_users');
    }
}
