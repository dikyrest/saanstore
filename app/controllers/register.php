<?php

class Register extends Controller
{
    function __construct() {
        session_start();
    }

    public function index() {
        $this->view('register/index');
    }

    public function validate() {
        $this->model('UserModel')->validateRegister();
    }
}
