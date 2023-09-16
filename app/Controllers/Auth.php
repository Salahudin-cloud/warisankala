<?php


namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{

    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    // login view 
    public function index()
    {
        return view('auth/login');
    }


    // register view  
    public function registerView()
    {
        return view('auth/register');
    }


    // process login ( authentication )
    public function processLogin()
    {
        // catch data from form login 
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        //validate user 
        if ($this->userModel->validateUser($username, $password)) {
            $user = $this->userModel->getUser($username, $password);
            if ($user->username == 'admin') {
                return redirect()->to('/admin_dashboard');
            }

            return  "login berhasil";
        } else {
            echo "login gagal";
            exit();
        }
    }


    // process registration 
    public function processRegister()
    {
        // catch data from form registration 
        $newUsername = $this->request->getPost('username');
        $newPassword = $this->request->getPost('password');

        // register new user 
        $data = [
            'username' => $newUsername,
            'password' => md5(json_encode($newPassword)),
            'foto_profile' => 'default.png'
        ];

        // do insert data 
        if ($this->userModel->addNewUser($data)) {
            return redirect()->to('/');
        } else {
            return redirect()->to('register');
        }
    }


    public function logout()
    {
        return redirect()->to('/');
    }
}
