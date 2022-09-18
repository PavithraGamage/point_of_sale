<?php 
namespace App\Controllers;
use CodeIgniter\CodeIgniter;


class Login extends BaseController{

    public function sign_in(){
       return  view('login/login');
    }

    public function forgot_password(){
        return view('login/reset_password');
    }

}


?>