<?php

class Home extends Controller
{
    function __construct() {
        session_start();
    }
    
    public function index()
    {
        $products = $this->model('ProductModel')->getAllProducts();
        if (isset($_SESSION['username'])) {
            $cartnum = sizeof($this->model('CartModel')->getCartByUserId($_SESSION['user_id']));
        } else {
            $cartnum = 0;
        }
        $this->view('home/index', ['products' => $products, 'cartnum' => $cartnum]);
    }
}