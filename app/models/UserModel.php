<?php

class UserModel {
    private $table = 'users';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getUserByUsernamePassword($username, $password) {
        $this->db->query("SELECT * FROM $this->table WHERE username = :username AND password = :password");
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        return $this->db->single();
    }

    public function getUserByUsername($username) {
        $this->db->query("SELECT * FROM $this->table WHERE username = :username");
        $this->db->bind('username', $username);
        return $this->db->single();
    }

    public function getAllUsers() {
        $this->db->query("SELECT * FROM $this->table WHERE isadmin = 0");
        return $this->db->resultSet();
    }

    public function deleteUser($user_id) {
        $this->db->query("DELETE FROM $this->table WHERE user_id = :user_id");
        $this->db->bind('user_id', $user_id);
        $this->db->execute();
    }

    public function validateUser() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === '' || $password === '') {
            $_SESSION['error'] = 'Username atau password tidak boleh kosong';
            header('location: ' . BASE_URL . '/login');
        } else {
            $user_exists = $this->getUserByUsernamePassword($username, $password);
            if ($user_exists) {
                unset($_SESSION['error']);
                $_SESSION['username'] = $user_exists['username'];
                $_SESSION['isAdmin'] = $user_exists['isadmin'];
                $_SESSION['user_id'] = $user_exists['user_id'];
                header('location: ' . BASE_URL . '/');
            } else {
                $_SESSION['error'] = 'Username atau password salah';
                header('location: ' . BASE_URL . '/login');
            }
        }
    }

    public function validateRegister() {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];

        if ($username === '' || $password === '' || $repassword === '') {
            $_SESSION['error'] = 'Username, password, dan konfirmasi password tidak boleh kosong';
            header('location: ' . BASE_URL . '/register');
        } else if ($password !== $repassword) {
            $_SESSION['error'] = 'Password dan konfirmasi password tidak cocok';
            header('location: ' . BASE_URL . '/register');
        } else {
            $user_exists = $this->getUserByUsername($username);
            if ($user_exists) {
                $_SESSION['error'] = 'Username sudah terdaftar';
                header('location: ' . BASE_URL . '/register');
            } else {
                $this->db->query("INSERT INTO $this->table (username, email, telephone, `password`) VALUES (:username, :email, :telephone, :password)");
                $this->db->bind('username', $username);
                $this->db->bind('email', $email);
                $this->db->bind('telephone', $telephone);
                $this->db->bind('password', $password);
                $this->db->execute();
                unset($_SESSION['error']);
                $_SESSION['success'] = 'Pendaftaran berhasil';
                header('location: ' . BASE_URL . '/login');
            }
        }
    }

    public function logout() {
        session_destroy();
        header('location: ' . BASE_URL . '/');
    }
}