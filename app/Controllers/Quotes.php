<?php

namespace App\Controllers;
use CodeIgniter\CodeIgniter;

class Quotes extends BaseController{
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
}

?>