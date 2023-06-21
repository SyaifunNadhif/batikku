<?php

class Product_model {
    private $product = [
        [
            "id" => 1,
            "nama" => "Baju xinchuu",
            "gender" => "Pria",
            "kategori" => "Baju",
            "harga" => 60000,
            "deskripsi"=> "wahh baju keren",
            "img" => "batik-img.png"
        ],
        [
            "id" => 2,
            "nama" => "Baju somasii",
            "gender" => "Pria",
            "kategori" => "Baju",
            "harga" => 64000,
            "deskripsi"=> "wahh baju keren",
            "img" => "batik-img.png"
        ],
        [
            "id" => 3,
            "nama" => "Baju xinchuu tooo",
            "gender" => "Pria",
            "kategori" => "Baju",
            "harga" => 50000,
            "deskripsi"=> "wahh baju keren",
            "img" => "batik-img.png"
        ],
        [
            "id" => 4,
            "nama" => "Baju xin to chuu",
            "gender" => "Pria",
            "kategori" => "Baju",
            "harga" => 69000,
            "deskripsi"=> "wahh baju keren",
            "img" => "batik-img.png"
        ],
    ];

    public function getAllProduct()
    {
        return $this->product;
    }


}