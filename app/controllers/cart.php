<?php

class Cart extends Controller {
    function __construct() {
        session_start();
    }

    public function index() {
        $this->view('cart/index');
    }
}