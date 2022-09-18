<?php

namespace App\Controllers;
use CodeIgniter\CodeIgniter;
use CodeIgniter\View\Table;
use App\Models\Users;
use App\Libraries\Test_library;



class Invoice extends BaseController{

    // new invoice ----------------------------------------------
    public function new_invoice()
    {
      
        return view('invoice/new_invoice');
        
    }

    // all invoice ---------------------------------------------
    public function all_invoices()
    {

        // new table
        $table = new Table();

        // load model
        $users = new Users();
        $data['users'] = $users->get_users();

        // return view
        return view('invoice/all_invoices', $data);
        
    }

    // custom library
    public $tl;

    public function __construct()
    {
        $this->tl = new Test_library;
    }

    public function lib(){
        return $this->tl->get_data();
    }

}
