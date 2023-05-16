<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengedit Data</title>
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
        <h1>Edit Data</h1>
    </div>
    <br>
    <br>

    <a href="full.php">Lihat Semua Data</a>
    <br>

    <h3>Edit Data</h3>

    <?php
    include "koneksi.php";
    $nim = $_GET['nim'];
    $data = mysqli_query($koneksi, "SELECT * from data_mahasiswa WHERE NIM='$nim'") or die();
    $no = 1;
    while($d = mysqli_fetch_array($data)) {
        ?>
        <form action="update.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="NIM" value="<?php echo $d['NIM'] ?>">
                        <input type="text" name="NIM" value="<?php echo $d['NIM'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="Alamat" value="<?php echo $d['Alamat'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
        <?php
    }
    ?>
</body>
</html>