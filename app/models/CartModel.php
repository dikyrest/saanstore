<?php

class CartModel {
    private $table = 'carts';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getCartByUserId($user_id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' INNER JOIN products ON products.product_id=' . $this->table .  '.product_id WHERE user_id=:user_id');
        $this->db->bind('user_id', $user_id);
        return $this->db->resultSet();
    }

    public function getCartByUserIdProductId($user_id, $product_id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE product_id=:product_id AND user_id=:user_id');
        $this->db->bind('product_id', $product_id);
        $this->db->bind('user_id', $user_id);
        return $this->db->resultSet();
    }

    public function addCart($user_id, $product_id) {
        $cart_product = $this->getCartByUserIdProductId($user_id, $product_id);
        if (empty($cart_product)) {
            $this->db->query('INSERT INTO ' . $this->table . ' (product_id, user_id, quantity) VALUES (:product_id, :user_id, :quantity)');
            $this->db->bind('product_id', $product_id);
            $this->db->bind('user_id', $user_id);
            $this->db->bind('quantity', 1);
            $this->db->execute();
        } else {
            $this->db->query('UPDATE ' . $this->table . ' SET quantity=quantity+1 WHERE user_id=:user_id AND product_id=:product_id');
            $this->db->bind('product_id', $product_id);
            $this->db->bind('user_id', $user_id);
            $this->db->execute();
        }
    }

    public function deleteCart($user_id, $product_id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE user_id=:user_id AND product_id=:product_id');
        $this->db->bind('product_id', $product_id);
        $this->db->bind('user_id', $user_id);
        $this->db->execute();
    }

    public function checkoutCart($user_id, $product_id) {
        $cart_product = $this->getCartByUserIdProductId($user_id, $product_id);
        
        $this->db->query('SELECT price FROM products WHERE product_id=:product_id');
        $this->db->bind('product_id', $product_id);
        $cart_product[0]['price'] = $this->db->single()['price'];

        $this->db->query('INSERT INTO orders (product_id, user_id, quantity, total) VALUES (:product_id, :user_id, :quantity, :total)');
        $this->db->bind('product_id', $product_id);
        $this->db->bind('user_id', $user_id);
        $this->db->bind('quantity', $cart_product[0]['quantity']);
        $this->db->bind('total', $cart_product[0]['price']);
        $this->db->execute();
        $this->deleteCart($user_id, $product_id);
    }
}