<?php

namespace App\Controllers;
use CodeIgniter\CodeIgniter;

class Items extends BaseController{
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

}
