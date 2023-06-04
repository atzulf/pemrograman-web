<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Lihat Detail Data</title>
    <style>
             *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        color: white;
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
            opacity: 85%;
        }
        .teks{
            text-align: center;
        }
        .tekskiri{
            text-align: left;
        }
        .kotax{
        width: 100%;
        padding: 20px;
        background-color: #1a7aba;
        box-shadow: 0px 0px 5px #ccc;
        border-radius: 20px;
        }
    </style>
</head>
<body>
        <div class="kotax">
            <div class="judul teks">
                <h2>TAMPILAN DATA</h2>
            </div>
        </div>
        <br>
        <br>
        <div class="container box">
            <div class="tekskiri">
                <h3 class="title">
                    Detail data
                </h3>
            </div>
            <br>
        <?php
                include ("koneksi.php");
                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "SELECT * from datamhs WHERE id='$id'") or die('koneksi gagal');
                $no = 1;
                while($d = mysqli_fetch_array($data)){
                ?>
                    <table>
                        <tr>
                            <td>NIM</td>
                            <td>: <?php echo $d['nim'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>: <?php echo $d['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Prodi</td>
                            <td>: <?php echo $d['prodi'] ?></td>
                        </tr>
                        <tr>
                            <td>Angkatan</td>
                            <td>: <?php echo $d['angkatan'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: <?php echo $d['alamat'] ?></td>
                        </tr>
                        <tr></tr>
                    </table>
                    <?php
                } ?>
            <br>
            <br>
            <div class="judul teks">
            <a href="dashboard.php" class="btn btn-info">Klik Disini Untuk Kembali ke menu Awal</a>
            </div>
        </div>
        <br>
</body>
</html>