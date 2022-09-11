<?php

namespace App\Controllers;

use CodeIgniter\CodeIgniter;

class Client extends BaseController
{

    // add client
    public function add_client()
    {
        return view('add_client');
    }

    // all clients
    public function all_clients()
    {
        return view('all_clients');
    }
}
