<?php 
namespace App\Controllers;
use CodeIgniter\CodeIgniter;


class Login extends BaseController{

    public function sign_in(){
       return  view('login');
    }

    public function forgot_password(){
        return view('reset_password');
    }

}


?>