<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    // db construct create
    public $db;

    public function __construct()
    {
        $this->db =  \Config\Database::connect();
    }

    // get all users
    public function get_users()
    {
        
        $query = 'SELECT * FROM `users`';
        $run = $this->db->query($query);

        $result = $run->getResult();

        return $result;
    }
}
