<?php 
namespace App\Controllers;
use CodeIgniter\CodeIgniter;


class Email extends BaseController{

    public function index(){

        // first need to config the email file in the app/config/email.php
        echo "test email";

        $to = 'pavithragamage916@gmail.com';
        $subject = 'Test Email';
        $message = '<h2>Hi Pavithra</h2> <br> You Receive new email form us';
        $file_path = 'public/images/1.png';

        // load email services
        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setSubject($subject);
        $email->setMessage($message);

        // attach file
        $email->attach($file_path);

        // send email
        $email->send();
    }
}


?>