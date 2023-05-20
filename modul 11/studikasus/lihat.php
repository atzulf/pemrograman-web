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
        color: #27E1C1;
        }
        
        .box {
            width: 100%;
            padding: 20px;
            background-color: #0B2447;
            box-shadow: 0px 0px 5px #ccc;
            border-radius: 20px;
        }
        .teks{
            text-align: center;
        }
        .kotax{
        width: 100%;
        padding: 20px;
        background-color: #00337C;
        box-shadow: 0px 0px 5px #ccc;
        border-radius: 20px;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="kotax">
            <div class="judul teks">
                <h1>Detail Data</h1>
            </div>
        </div>
        <br>
        <br>
        <div class="box">
        <?php
                include ("koneksi.php");
                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "SELECT * from data_mahasiswa WHERE id='$id'") or die('koneksi gagal');
                $no = 1;
                while($d = mysqli_fetch_array($data)){
                ?>
                    <table>
                        <tr>
                            <td>NIM</td>
                            <td>: <?php echo $d['NIM'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>: <?php echo $d['Nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: <?php echo $d['Alamat'] ?></td>
                        </tr>
                        <tr></tr>
                    </table>
                    <?php
                } ?>
            <br>
            <br>
            <div class="judul teks">
            <a href="dasboard.php" class="btn btn-info">Klik Disini Untuk Kembali ke menu Awal</a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</body>
</html>