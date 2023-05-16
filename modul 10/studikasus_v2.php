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
    <img src="https://i.pinimg.com/564x/41/a2/a5/41a2a560f6af4ea3e04b487ad9710e2c.jpg"width=410px
    style="display: block;margin-left: auto;margin-right: auto; width=300px;border:8px solid #576CBC">
    <font color="#B6EADA">
        <h3 align="center">
            "Halo Bang "
        </h3> 
    </font>
</body>
</html>
<?php
    session_start();
    if(isset($_SESSION['login'])) {
        echo "<h1>Selamat Datang, ". $_SESSION['login'] ."</h1><br>";
        echo "<h2>Halaman ini bisa tampil jika berhasil login. Ini adalah HOME (beranda) kamu.</h2><br>";
        echo "<h2>Klik <a href='studikasus_v3.php'>disini (studikasus_v3.php)</a> untuk logout (keluar)</h2><br>";
    } else {
        die ("<h2>Anda belum login! <a href='studikasus_v1.php'>disini</h2></a");
    }
?>