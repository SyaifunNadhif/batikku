<?php
// mendapatkan id product dari url
$id_product = $_GET['id'];

// jika sudah ada produk itu dikeranjang, maka produk itu jumlahnya +1
if (isset($_SESSION['keranjang'][$id_product])) {
    $_SESSION['keranjang'][$id_product] += 1;
} else {
    $_SESSION['keranjang'][$id_product] = 1;
}

// masuk halaman keranjang
echo "<script>alert('Tiket telah masuk ke keranjang belanja');</script>";
echo "<script>location='cart.php'</script>";