<?php

class Login extends Controller
{
    public function __construct(){
        session_start();
    }
    
    public function index() {
        $this->view('login/index');
    }

    public function validate() {
        $this->model('UserModel')->validateUser();
    }
}