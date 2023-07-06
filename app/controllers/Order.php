<?php

class Order extends Controller {

    public function buyProduct($id)
    {
        // Mendapatkan ID produk dari parameter
        $productId = $id;

        // Memulai session
        session_start();

        // Jika sudah ada produk itu dicart, maka jumlah produk +1
        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId] += 1;
        } else {
            $_SESSION['cart'][$productId] = 1;
        }

        header('Location: ' . BASEURL . '/order/cart');
        exit;
    }

    public function cart()
    {
        $data['judul'] = 'Cart';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        
        // Ambil informasi produk dari session dan tampilkan pada halaman cart
        $cartProducts = [];
        foreach ($_SESSION['cart'] as $id => $jumlah) {
            $product = $this->model('Product_model')->getProductById($id);
            $product['jumlah'] = $jumlah;
            $cartProducts[] = $product;
        }
        
        $data['products'] = $cartProducts;
        
        $this->view('order/cart', $data);
        
        // $this->view('templates/footer');
        $this->view('templates/bottom');
    }

    // public function cartProduct($id)
    // {
        
    //     $data['product'] = $this->model('Product_model')-> getProductById($id);
    //     $this->view('order/cart', $data);
        
    // }

}