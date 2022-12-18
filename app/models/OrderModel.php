<?php

class OrderModel {
    private $table = 'orders';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function addOrder($user_id, $product_id, $quantity, $total) {
        $this->db->query('INSERT INTO ' . $this->table . ' (product_id, user_id, quantity, total) VALUES (:product_id, :user_id, :quantity, :total)');
        $this->db->bind('product_id', $product_id);
        $this->db->bind('user_id', $user_id);
        $this->db->bind('quantity', $quantity);
        $this->db->bind('total', $total);
        $this->db->execute();
    }

    public function getAllOrders() {
        $this->db->query('SELECT * FROM ' . $this->table . ' INNER JOIN products ON products.product_id=' . $this->table .  '.product_id' . ' INNER JOIN users ON users.user_id=' . $this->table .  '.user_id');
        return $this->db->resultSet();
    }

    public function getOrderByUserId($user_id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' INNER JOIN products ON products.product_id=' . $this->table .  '.product_id WHERE user_id=:user_id');
        $this->db->bind('user_id', $user_id);
        return $this->db->resultSet();
    }

    public function serveOrder($order_id) {
        $this->db->query('UPDATE ' . $this->table . ' SET status="completed" WHERE order_id=:order_id');
        $this->db->bind('order_id', $order_id);
        $this->db->execute();
    }

    public function declineOrder($order_id) {
        $this->db->query('UPDATE ' . $this->table . ' SET status="declined" WHERE order_id=:order_id');
        $this->db->bind('order_id', $order_id);
        $this->db->execute();
    }
}