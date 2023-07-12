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
        
        $this->view('templates/footer');
        $this->view('templates/bottom');
    }

    public function cartDelete($id)
    {
        $productId = $id;
    
        session_start();
    
        if (isset($_SESSION['cart'][$productId])) {
            unset($_SESSION['cart'][$productId]);
        }
    
        header('Location: ' . BASEURL . '/order/cart');
        exit;
    }

    public function checkout()
    {
        $data['judul'] = 'Checkout';
        $this->view('templates/header', $data);
        // $this->view('templates/navbar');
        
        // Ambil informasi produk dari session dan tampilkan pada halaman cart
        $cartProducts = [];
        foreach ($_SESSION['cart'] as $id => $jumlah) {
            $product = $this->model('Product_model')->getProductById($id);
            $product['jumlah'] = $jumlah;
            $cartProducts[] = $product;
        }
        
        $data['products'] = $cartProducts;
        
        $this->view('order/checkout', $data);
        
        $this->view('templates/footer');
        $this->view('templates/bottom');
    }

    public function checkoutProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["checkout"])) {
            $orderModel = $this->model('Order_model');
            $data['id_user'] = $_SESSION['user']['id'];
            $data['tanggal'] = date("Y-m-d"); 
            $selectedBank = $_POST['id_bank'];
            $data['totalbeli'] = $orderModel->getTotalBelanja();
            $data['status'] = "Belum Lunas";
            $data['cart'] = $_SESSION["cart"];
            $data['alamat'] = $_POST["alamat"];
            $data['ukuran'] = $_POST["ukuran"];

            $id_pembelian_terbaru = $orderModel->insertPembelian($data);
        }
    }
    


}