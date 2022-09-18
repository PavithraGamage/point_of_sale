<?php

namespace App\Controllers;

use CodeIgniter\CodeIgniter;


class Database extends BaseController
{

    public function index()
    {
        $db = \Config\Database::connect();
        // print_r($db);

        $query = 'SELECT * FROM `users`';
        $run = $db->query($query);

        $result = $run->getResult();
        echo '<pre>';
        print_r($result);

    }
}
