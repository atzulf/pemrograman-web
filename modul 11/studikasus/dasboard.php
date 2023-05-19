<?php
    include ("koneksi.php");

    if (isset($_POST['tambah_data'])) {
        $nama = $_POST['Nama'];
        $nim = $_POST['NIM'];
        $alamat = $_POST['Alamat'];
    
        $query = mysqli_query($koneksi, "INSERT INTO data_mahasiswa (Nama, NIM, Alamat) VALUES ('$nama', '$nim', '$alamat')");
    
        if ($query) {
            $message = (object) [
                'type' => 'success',
                'text' => 'Berhasil menambah data'
            ];
            header("location: dasboard.php");
        } else {
            echo "Gagal tambah data";
        }
    }

    if (isset($_POST['log-out'])) {
        session_destroy();
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" >
    <title>Dashboard Data Mahasiswa</title>

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
    <!-- <div class="container"> -->
        <div class="box">
            <div class="kotax">
                <div class="teks">
                    <h2 class="title">Data Mahasiswa</h2>
                </div>
            </div>
            <br>
                <div class="box">
                <table class="table " id="data">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                    <tbody>
                </div>
            <?php
            include ("koneksi.php");
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * from data_mahasiswa");
            while($d = mysqli_fetch_array($data)) {
                ?>
                
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['NIM']; ?></td>
                    <td><?php echo $d['Nama']; ?></td>
                    <td><?php echo $d['Alamat']; ?></td>
                    <td>
                        <a class="btn btn-info" href="lihat.php?nim=<?php echo $d['NIM']; ?>">Lihat</a>
                        <a class="btn btn-info" href="edit.php?nim=<?php echo $d['NIM']; ?>">Edit</a>
                        <a class="btn btn-info" href="hapus.php?nim=<?php echo $d['NIM']; ?>">Hapus</a>
                    </td>
                </tr>
                
                <?php
            }
            ?>
            </table>
            <div class="d-flex justify-content-center align-items-center p-2 bd-highlight">
                <form action="tambahdata.php" method="post">
                    <button class="ms-3 btn btn-info " type="submit" name="tambah">
                        Tambah Data
                    </button>
                </form>
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
    </body>
</html>