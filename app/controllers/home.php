<?php

class Home extends Controller
{
    function __construct() {
        session_start();
    }
    
    public function index()
    {
        $products = $this->model('ProductModel')->getAllProducts();
        $this->view('home/index', ['products' => $products]);
    }
}