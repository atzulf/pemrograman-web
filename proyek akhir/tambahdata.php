<?php
    include ("koneksi.php");
    if (isset($_POST['tambah_data'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $prodi = $_POST['prodi'];
        $angkatan = $_POST['angkatan'];
        $alamat = $_POST['alamat'];
    
        $query = mysqli_query($koneksi, "INSERT INTO datamhs (nama, nim, prodi, angkatan, alamat) VALUES ('$nama', '$nim', '$prodi', '$angkatan', '$alamat')");
    
        if ($query) {
            $message = (object) [
                'type' => 'success',
                'text' => 'Berhasil menambah data'
            ];
            header("location: dashboard.php");
        } else {
            echo "Gagal tambah data";
        }
    }

    if (isset($_POST['log-out'])) {
        session_destroy();
        header("location: loginpage.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
         *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        color:white;
        }
        .form-group {
            display:flex;
            flex-direction: column;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        body{
            background-image: url("https://images.alphacoders.com/108/1081303.png");
        }

        .box {
            width: 100%;
            padding: 20px;
            background-color: #013049;
            box-shadow: 0px 0px 5px #ccc;
            border-radius: 20px;
        }
        .teks{
            text-align: center;
        }

        .tekskiri{
            margin: 10px;
            padding:0px;
            text-align:left;
        }
        .kotax{
            width: 100%;
            padding: 20px;
            background-color: #1a7aba;
            box-shadow: 0px 0px 5px #ccc;
            border-radius: 20px;
        }
        .lable{
            font-family: 'Poppins';
            color: #0B2447;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#data').DataTable();
        });
        function confirmInsert() {
            return confirm("Apakah anda akan menambahkan data?");
        }
    </script>
</head>
<body>
            <div class="kotax">
                <div class="teks">
                    <h2 class="title">DASHBOARD DATA</h2>
                </div>
            </div>
            <br>
        <div class="container box">
            <br>
                <h4>
                    Tambah Data Mahasiswa
                </h4>
            <form action="" method="post" onsubmit="return confirmInsert()">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" name="nim" id="nim" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="prodi">Prodi</label>
                        <input type="text" class="form-control" name="prodi" id="prodi" required>
                    </div>
                    <div class="form-group">
                        <label for="angkatan">Angkatan</label>
                        <input type="text" class="form-control" name="angkatan" id="angkatan" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat" cols="20" rows="10" required></textarea>
                    </div>
                    <div class="flex">
                        <button class="btn btn-info" type="submit" name="tambah_data">
                            Tambah
                        </button>
                        <a href="dashboard.php" class="btn btn-danger">
                            Batal
                        </a>
                    </div>
            </form>
            <br>
        <br>
        </div>
        
</body>
</html>