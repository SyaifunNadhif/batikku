<?php

class Product_model {
    // private $product = [
    //     [
    //         "id" => 1,
    //         "nama" => "Baju xinchuu",
    //         "gender" => "Pria",
    //         "kategori" => "Baju",
    //         "harga" => 60000,
    //         "deskripsi"=> "wahh baju keren",
    //         "img" => "batik-img.png"
    //     ],
    //     [
    //         "id" => 2,
    //         "nama" => "Baju somasii",
    //         "gender" => "Pria",
    //         "kategori" => "Baju",
    //         "harga" => 64000,
    //         "deskripsi"=> "wahh baju keren",
    //         "img" => "batik-img.png"
    //     ],
    //     [
    //         "id" => 3,
    //         "nama" => "Baju xinchuu tooo",
    //         "gender" => "Pria",
    //         "kategori" => "Baju",
    //         "harga" => 50000,
    //         "deskripsi"=> "wahh baju keren",
    //         "img" => "batik-img.png"
    //     ],
    //     [
    //         "id" => 4,
    //         "nama" => "Baju xin to chuu",
    //         "gender" => "Pria",
    //         "kategori" => "Baju",
    //         "harga" => 69000,
    //         "deskripsi"=> "wahh baju keren",
    //         "img" => "batik-img.png"
    //     ],
    // ];
    
    // public function getAllProduct()
    // {
    //     return $this->product;
    // }
    
    private $table = 'product';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProduct()
    {
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function getProductById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

}