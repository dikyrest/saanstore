<?php

class ProductModel {
    private $table = 'products';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllProducts() {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultSet();
    }

    public function getProductById($id) {
        $this->db->query("SELECT * FROM $this->table WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function addProduct() {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        $this->db->query("INSERT INTO $this->table (`name`, price, `description`, `image`) VALUES (:name, :price, :description, :image)");
        $this->db->bind('name', $name);
        $this->db->bind('price', $price);
        $this->db->bind('description', $description);

        if ($_FILES['image']['error'] === 0) {
            $name = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $error = $_FILES['image']['error'];
            $size = $_FILES['image']['size'];
            $ext = explode('.', $name);
            $ext = strtolower(end($ext));
            $allowed_ext = ['jpg', 'jpeg', 'png'];

            if (in_array($ext, $allowed_ext)) {
                if ($error === 0) {
                    if ($size <= 1000000) {
                        $new_name = uniqid();
                        $new_name .= '.';
                        $new_name .= $ext;
                        $destination = 'public/images/' . $new_name;
                        if (move_uploaded_file($tmp_name, $destination)) {
                            $this->db->bind('image', $destination);
                        }
                    }
                }
            }
        }

        $this->db->execute();
        header('location: ' . BASE_URL . '/');
    }

    public function editProduct($id) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $old_image = $this->getProductById($id)['image'];

        $this->db->query("UPDATE $this->table SET `name` = :name, price = :price, `description` = :description, `image` = :image WHERE id = :id");
        $this->db->bind('name', $name);
        $this->db->bind('price', $price);
        $this->db->bind('description', $description);
        $this->db->bind('id', $id);

        if ($_FILES['image']['error'] === 0) {
            $name = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $error = $_FILES['image']['error'];
            $size = $_FILES['image']['size'];
            $ext = explode('.', $name);
            $ext = strtolower(end($ext));
            $allowed_ext = ['jpg', 'jpeg', 'png'];

            if (in_array($ext, $allowed_ext)) {
                if ($error === 0) {
                    if ($size <= 1000000) {
                        $new_name = uniqid();
                        $new_name .= '.';
                        $new_name .= $ext;
                        $destination = 'public/images/' . $new_name;
                        if (move_uploaded_file($tmp_name, $destination)) {
                            $this->db->bind('image', $destination);
                        }
                    }
                }
            }
        } else {
            $this->db->bind('image', $old_image);
        }

        $this->db->execute();
        header('location: ' . BASE_URL . '/');
    }

    public function deleteProduct($id) {
        $this->db->query("DELETE FROM $this->table WHERE id = :id");
        $this->db->bind('id', $id);
        $this->db->execute();
        header('location: ' . BASE_URL . '/');
    }
}