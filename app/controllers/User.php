<?php

class User extends Controller {

    public function register()
    {
        $data['judul'] = 'Register';
        // $data['user'] = $this->model('User_model')-> register();
        $this->view('templates/header', $data);
        $this->view('user/register', $data);
        $this->view('templates/bottom');
    }

    public function login()
    {
        $data['judul'] = 'Login';
        // $data['user'] = $this->model('User_model')-> register();
        $this->view('templates/header', $data);
        $this->view('user/login', $data);
        $this->view('templates/bottom');
    }

    // public function registerUser(){
    //     // var_dump($_POST); //cek data yang dikirim
    //     if( $this->model('User_model')->registerDataUser($_POST) > 0){
    //         header('Location: ' . BASEURL . '/home');
    //         exit;
    //     }
    // }

    public function registerUser()
    {
        $userModel = $this->model('User_model');
        $data = $_POST;

        $result = $userModel->registerDataUser($data);
        if ($result === "Email already exists") {
            echo '<script>alert("Email already exists. Please choose a different email.");</script>';
            echo '<script>window.location.href = "' . BASEURL . '/user/register";</script>';
            exit;
        } elseif ($result > 0) {
            header('Location: ' . BASEURL . '/home');
            exit;
        } 
    }

    public function loginUser()
    {
        $userModel = $this->model('User_model');
        $data = $_POST;
    
        $isValidUser = $userModel->validateUser($data);
    
        if ($isValidUser) {
            // Login berhasil, ambil data pengguna dari database
            $user = $userModel->getUserByEmail($data['email']);
    
            if ($user) {
                // Data pengguna valid, simpan dalam session
                session_start();
                $_SESSION['user'] = $user;
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                    header('Location: ' . BASEURL . '/order/cart');
                    exit;
                } else {
                    header('Location: ' . BASEURL . '/home');
                    exit;
                }
        
            }
        }
    
        // Login gagal, tampilkan pesan error
        echo '<script>alert("Invalid email or password.");</script>';
        echo '<script>window.location.href = "' . BASEURL . '/user/login";</script>';
        exit;
    }

    public function logoutUser()
    {
        // Mulai session
        session_start();
    
        // Hapus semua data session
        session_unset();
    
        // Hancurkan session
        session_destroy();
    
        // Arahkan pengguna ke halaman home
        header('Location: ' . BASEURL . '/home');
        exit;
    }

    public function profil()
    {
        $data['judul'] = 'Profil';
        $this->view('templates/header', $data);
        $this->view('user/profil');
        // $this->view('templates/footer');
        $this->view('templates/bottom');
    }


}