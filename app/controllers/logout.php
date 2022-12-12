<?php

class Logout extends Controller
{
    function __construct()
    {
        $this->userModel = $this->model('UserModel');
        session_start();
    }

    public function index()
    {
        $this->model('UserModel')->logout();
    }
}
