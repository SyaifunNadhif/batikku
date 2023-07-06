<?php

class User_model {
    private $nama = 'Nadhif';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser()
    {
        return $this->nama;
    }

    public function registerDataUser($data)
    {
        // Cek apakah email sudah ada dalam tabel user
        $checkQuery = "SELECT COUNT(*) as count FROM user WHERE email = :email";
        $this->db->query($checkQuery);
        $this->db->bind('email', $data['email']);
        $result = $this->db->single();

        if ($result['count'] > 0) {
            // Email sudah ada, lakukan penanganan kesalahan atau kembalikan pesan error
            return "Email already exists";
        }

        $query = "INSERT INTO user 
                    VALUES ('', :fullname, :phonenumber, :email, :passworduser)";
        $this->db->query($query);
        $this->db->bind('fullname', $data['fullname']);
        $this->db->bind('phonenumber', $data['phonenumber']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('passworduser', md5($data['password']));
       
        $this->db->execute();

        return $this->db->rowCount();

    }

    public function validateUser($data)
    {
        $query = "SELECT * FROM user WHERE email = :email";
        $this->db->query($query);
        $this->db->bind('email', $data['email']);
        $result = $this->db->single();
    
        // Periksa apakah ada data pengguna dengan email yang cocok
        if ($result) {
            // Jika ada, periksa apakah password cocok dengan menggunakan md5()
            if (md5($data['password']) === $result['passworduser']) {
                // Password cocok, login berhasil
                return true;
            }
        }
    
        // Email atau password tidak valid
        return false;
    }

    public function getUserByEmail($email)
    {
        $query = "SELECT * FROM user WHERE email = :email";
        $this->db->query($query);
        $this->db->bind('email', $email);
        $result = $this->db->single();

        return $result;
    }

}