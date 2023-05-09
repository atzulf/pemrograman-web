<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman login berhasil</title>
    <style>
     *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        color: #27E1C1;
    }
    </style>
</head>
<body bgcolor="0B2447">
    <img src="https://i.pinimg.com/564x/db/5a/cd/db5acdfde9f2bdeaa3626c7a3ef93762.jpg"width=410px
    style="display: block;margin-left: auto;margin-right: auto; width=300px;border:8px solid #576CBC">
    <font color="#B6EADA">
        <h3 align="center">
            "Selamat berjumpa kembali kawanku "
        </h3> 
    </font>
</body>
</html>
<!-- Merupakan form php -->
<?php
    session_start();
    if (isset($_SESSION['login'])) {
        unset($_SESSION);
        session_destroy();
        echo "<h1> Kamu sudah berhasil logout/Keluar</h1>";
        echo "<h1>Klik <a href='studikasus_v1.php'>disini</a> untuk login lagi.<br> Kamu tidak dapat masuk ke 
        <a href='studikasus_v2.php'>HOME (beranda) </a> lagi.</h2>";
    }
?>