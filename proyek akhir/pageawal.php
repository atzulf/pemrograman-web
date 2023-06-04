<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar html</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        *{
    text-decoration: none;
    margin: 0px;
    padding: 0px;
}
    body{
        margin: 0px;
        padding: 0px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana;
    }

    img {
        width: 600px;
        height: 500px;
        position:relative;
    }

    .wrapper {
        width: 1100px;
        margin: auto;
        position: relative;
    }

    .logo a {
        font-size: 35px;
        font-weight: bold;
        float:left;
        margin: 10px;
        font-family: Trebuchet MS;
        color:#B6EADA;
    }
    .menu {
        float:right;
        color: aquamarine;
    }

    nav{
        width: 100%;
        margin: auto;
        display:flex;
        line-height: 80px;
        position: sticky;
        position: -webkit-sticky;
        top: 0;
        background: #03001C;
    }
    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    nav ul li{
        float:left;
    }

    nav ul li a {
        color: #B6EADA;
        font-weight: bold;
        text-align: center;
        padding: 0px 16px 0px 16px;
        text-decoration: none;

    }

    nav ul li a:hover{
        text-decoration: underline;
    }

    section{
        margin: auto;
        display: flex;
        margin-bottom: 50px;
    }

    .kolom {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .kolom .deskripsi{
        font-size: 30px;
        font-weight: bold;
        font-family: monospace;
        color: #03001C;
    }

    h2{
        font-family: Verdana;
        font-weight: 800;
        font-size: 45px;
        margin-bottom: 20px;
        color:#03001C;
        width: 100%;
        line-height: 50px;
    }
    </style>
</head>
<body>
    <nav>
        <div class="container wrapper">
            <div class="logo"><a href="">Created by Zoulv</a></div>
            <div class="menu d-flex justify-content-between align-items-center p-2 bd-highlight">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a></a></li>
                    <li><a class=" btn btn-info" href="loginpage.php">Login </a></li>
                    <li><a></a></li> 
                    <li><a class=" btn btn-success" href="register.php">Register </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <div class="container d-flex justify-content-center align-items-center wrapper">
        <section id="home">
            <img src="eidt.png">
        </section>
        <div class="kolom">
            <p class="deskripsi">Website Data Mahasiswa</p>
            <h2>Universitas Negeri 
                <br>Yogyakarta</h2>
            <p>Tugas Proyek Akhir Matkul Pemrograman-web Semester 2 TI UNY angkatan 22</p>
        </div>
    </div>
</body>
</html>