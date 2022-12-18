<?php

class Cart extends Controller {
    function __construct() {
        session_start();
    }

    public function index() {
        $cart = $this->model('CartModel')->getCartByUserId($_SESSION['user_id']);
        $cartnum = sizeof($cart) ?? 0;
        $this->view('cart/index', ['cart' => $cart, 'cartnum' => $cartnum]);
    }

    public function add($product_id) {
        $this->model('CartModel')->addCart($_SESSION['user_id'], $product_id);
        header('Location: ' . BASE_URL . '/cart');
    }

    public function delete($product_id) {
        $this->model('CartModel')->deleteCart($_SESSION['user_id'], $product_id);
        header('Location: ' . BASE_URL . '/cart');
    }

    public function checkout($product_id) {
        $this->model('CartModel')->checkoutCart($_SESSION['user_id'], $product_id);
        header('Location: ' . BASE_URL . '/cart');
    }
}