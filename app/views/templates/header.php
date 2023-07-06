<?php
session_start();

if (isset($_SESSION['user'])) {
    // Data pengguna tersedia, lakukan sesuatu
    // $user = $_SESSION['user'];
    // echo 'Welcome, ' . $user['fullname'];
// } else {
//     // Data pengguna tidak tersedia atau bukan array, arahkan ke halaman login
//     header('Location: ' . BASEURL . '/user/login');
//     exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/output.css">
    <title>Batik Kencana | <?= $data['judul'] ;?></title>
</head>

<body>

