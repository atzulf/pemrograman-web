<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data</title>

    <style>
     *{
        margin: 5px;
        padding: 5px;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        color:black;
    }
    </style>

</head>

<body>
    <div class="judul">
        <h1>Detail Data</h1>
    </div>
    <br>
    <br>

    
    <?php
    include ("koneksi.php");
    $nim = $_GET['nim'];
    $data = mysqli_query($koneksi, "SELECT * from data_mahasiswa WHERE NIM='$nim'") or die('koneksi gagal');
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

    
        <a href="full.php"><<< Kembali Lihat Semua Data</a>
</body>
</html>