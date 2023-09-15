<?php


namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    protected $table = 'users';
    protected $allowedFields = [
        'username',
        'password',
        'foto_profile',
    ];


    //  validate user 
    function validateUser($username, $password)
    {
        $hashedPassword = md5($password);
        $query = $this->db->table('users')
            ->where('username', $username)
            ->where('password', $hashedPassword)
            ->get()->getRow();

        if (!empty($query)) {
            return true;
        }

        return false;
    }


    // add new user 
    function addNewUser($data)
    {
        $builder = $this->db->table('users');

        // do insert user 
        if ($builder->insert($data)) {
            return true; // insert new user successfully
        }

        return false; //insert new user failed 


    }
}
