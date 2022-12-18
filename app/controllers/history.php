<?php

class History extends Controller {
    function __construct() {
        session_start();
    }

    public function index() {
        $orders = $this->model('OrderModel')->getOrderByUserId($_SESSION['user_id']);
        $cart = $this->model('CartModel')->getCartByUserId($_SESSION['user_id']);
        $cartnum = sizeof($cart) ?? 0;
        $this->view('history/index', ['orders' => $orders, 'cartnum' => $cartnum]);
    }
}