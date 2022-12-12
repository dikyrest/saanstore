<?php

class Product extends Controller
{
    function __construct() {
        session_start();
    }
    
    public function index()
    {
        $products = $this->model('ProductModel')->getAllProducts();
        $this->view('product/index', ['products' => $products]);
    }
    
    public function add()
    {
        $this->model('ProductModel')->addProduct();
    }
    
    public function edit($id)
    {
        $product = $this->model('ProductModel')->getProductById($id);
        $this->view('product/edit', ['product' => $product]);
    }

    public function update($id)
    {
        $this->model('ProductModel')->editProduct($id);
    }
    
    public function delete($id)
    {
        $this->model('ProductModel')->deleteProduct($id);
    }
}