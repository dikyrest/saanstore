<?php

class Orders extends Controller {
    function __construct() {
        session_start();
    }

    public function index() {
        $orders = $this->model('OrderModel')->getAllOrders();
        $this->view('orders/index', ['orders' => $orders]);
    }

    public function serve($product_id) {
        $this->model('OrderModel')->serveOrder($product_id);
        header('Location: ' . BASE_URL . '/orders');
    }

    public function decline($product_id) {
        $this->model('OrderModel')->declineOrder($product_id);
        header('Location: ' . BASE_URL . '/orders');
    }
}