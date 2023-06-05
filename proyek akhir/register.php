    <!-- Studi kasus modul 11 -->
    <!-- PHP -->
    <?php
        //menggunakan session
        session_start();
        include("koneksi.php");
        if(isset($_POST['daftar'])) {
            $user = $_POST['username']; //mengambil id
            $email = $_POST['email'];
            $pass = $_POST['password']; //mengambil password
            $query = mysqli_query($koneksi, "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$pass')");
            if ($query) {
                $_SESSION['popupText'] = "Akun berhasil dibuat. Silakan login untuk melanjutkan.";
                header("location: loginpage.php");
                exit();
            } else {
                echo "Gagal tambah data";
            }
            
    }
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun Baru</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
                <title>Login</title>
                <!-- Merupakan Script Javascript -->
                <script type="text/javascript">
                    function confirmInsert() {
                        return confirm("Apakah anda ingin menambah akun?");
                    }   
                    function validateForm() {
                        var id = document.forms["loginForm"]["id"].value;
                        var password = document.forms["loginForm"]["password"].value;
                        if (id == "" || password == "") {
                            alert("ID/Username dan Password tidak boleh kosong.");
                            if (id == "") {
                                document.forms["loginForm"]["id"].focus();
                            } else {
                                document.forms["loginForm"]["password"].focus();
                            }
                            return false;
                        } else if (!/^[a-zA-Z]+$/.test(id) || !/^[a-zA-Z]+$/.test(password)) {
                            alert("ID/Username dan Password harus huruf.");
                            return false;
                        }
                    }
                </script>
        <style>
                    *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins';
        }
        body{
            background-color: #05115e;
        }
        .login-box{
            width: 320px;
            height: 480px;
            background: #020827;
            color: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%,-50%);
            box-shadow: 5px 5px 10px rgba(0,0,0,0.5);
            padding: 70px 30px;
        }
        .login-box h2{
            margin-top: -20px;
            padding: 0 0 20px;
            font-size: 23px;
            text-align: center;
        }
        .user-box{
            position: relative;
        }
        .user-box input{
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }
        .user-box label{
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: 0.5s;
        }
        .user-box input:focus ~ label,
        .user-box input:valid ~ label{
            top: -20px;
            left: 0;
            color: #03a9f4;
            font-size: 12px;
        }
        .user-box input:focus,
        .user-box input:valid{
            border-bottom: 2px solid #03a9f4;
        }
        input[type="submit"]{
            background: transparent;
            border: none;
            outline: none;
            color: #fff;
            background: #03a9f4;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-bottom: 10px;
            position: absolute;
            right: 40px;
            left: 40px;
            bottom: 10%;
        }

        </style>
</head>
<body style="background:url('https://images.alphacoders.com/108/1081303.png');" >
    <div class="login-box">
        <h2>Buat akun <br> Baru</h2>
        <form name="loginForm" action="<?php $_SERVER['PHP_SELF']?>" method="post" onsubmit="return validateForm()">
            <!-- Class username -->
            <div class="user-box">
                <input type="text" name="username" id="username"placeholder="username"/>
                <label for="id">Username</label>
            </div>
            <!-- Class email -->
            <div class="user-box">
                <input type="text" name="email" id="email"placeholder="email"/>
                <label for="email">Email</label>
            </div>
            <!-- Class password -->
            <div class="user-box">
                <input type="password" name="password" id="password"placeholder="*******"/>
                <label for="password">Password</label>
            </div>
        <input class="submit-button" type="submit" value="Daftar" name="daftar" onclick="return confirmInsert()">
    </form>
    </div>
    <div class="mt-auto p-2 justify-content-evenly">
        <a href="pageawal.php" class="btn btn-danger">Klik untuk kembali</a>
    </div>

</body>
</html>