<?php

namespace App\Controllers;
use CodeIgniter\CodeIgniter;

class Category extends BaseController{
  
   // all Categories
   public function manage_categories()
   {
       return view('categories/categories');
   }

}

?>