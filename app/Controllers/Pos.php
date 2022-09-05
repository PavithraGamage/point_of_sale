<?php

namespace App\Controllers;
use CodeIgniter\CodeIgniter;

class Pos extends BaseController
{
    // dashboard
    public function dashboard()
    {
        return view('dashboard');
    }

    // password rest
    public function password_reset()
    {
        return view('reset_password');
    }

    // new invoice 
    public function new_invoice(){
        return view('new_invoice');
    }

    // all invoice 
    public function all_invoices(){
        return view('all_invoices');
    }
}
