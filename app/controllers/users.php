<?php

class Users extends Controller
{
    function __construct() {
        session_start();
    }
    
    public function index()
    {
        $users = $this->model('UserModel')->getAllUsers();
        $this->view('users/index', ['users' => $users]);
    }

    public function delete($id)
    {
        $this->model('UserModel')->deleteUser($id);
        header('location: ' . BASE_URL . '/users');
    }
}