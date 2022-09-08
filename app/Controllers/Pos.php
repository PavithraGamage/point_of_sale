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
    public function new_invoice()
    {
        return view('new_invoice');
    }

    // all invoice 
    public function all_invoices()
    {
        return view('all_invoices');
    }

    // new quotes
    public function new_quotes()
    {
        return view('new_quotes');
    }

    // all quotes
    public function all_quotes()
    {
        return view('all_quotes');
    }

    // new category
    public function new_category()
    {
        return view('new_category');
    }

    // all Categories
    public function all_categories()
    {
        return view('all_categories');
    }

    // new items
    public function new_items()
    {
        return view('new_items');
    }

    // all items
    public function all_items()
    {
        return view('all_items');
    }

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

    // add user
    public function add_user(){
        return view('add_user');
    }

    // all users
    public function all_users(){
        return view('all_users');
    }
}
