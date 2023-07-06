<?php

class Product extends Controller {
    public function index()
    {
        $data['judul'] = 'Product';
        $data['product'] = $this->model('Product_model')-> getAllProduct();
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('product/index', $data);
        $this->view('templates/footer');
        $this->view('templates/bottom');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Product';
        $data['product'] = $this->model('Product_model')-> getProductById($id);
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('product/detail', $data);
        $this->view('templates/footer');
        $this->view('templates/bottom');

    }
}