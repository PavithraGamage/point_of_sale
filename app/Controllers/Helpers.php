<?php 
namespace App\Controllers;
use CodeIgniter\CodeIgniter;

class Helpers extends BaseController{

    public function index(){
        helper(['form', 'html', 'cookie', 'array']);

        echo get_random([10,20,25,40,50,60]);
    }
}


?>