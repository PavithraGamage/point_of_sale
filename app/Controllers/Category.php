<?php

namespace App\Controllers;
use CodeIgniter\CodeIgniter;

class Category extends BaseController{
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

}

?>