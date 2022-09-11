<?php

namespace App\Controllers;
use CodeIgniter\CodeIgniter;

class Invoice extends BaseController{
    
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
}

?>