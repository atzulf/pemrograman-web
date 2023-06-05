<?php
    include ("koneksi.php");
    session_start();
    if (!isset($_SESSION['login'])) {
        header("Location: loginpage.php");
        exit;
    }

    if (isset($_POST['tambah_data'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $prodi = $_POST['prodi'];
        $angkatan = $_POST['angkatan'];
        $alamat = $_POST['alamat'];
    
        $query = mysqli_query($koneksi, "INSERT INTO datamhs (nama, nim, prodi, angkatan, alamat) VALUES ('$nama', '$nim', $prodi, $angkatan, '$alamat')");
    
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
        header("location: pageawal.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard data mahasiswa</title>
    <!-- Merupakan link untuk menambahkan bootsraps dan datatables -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" >

    <!-- Styling CSS yang digunakan -->
    <style>
         *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        color:white;
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
    </style>

    <!-- Merupakan Script Javascript yang digunakan -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#data').DataTable();
        });
        function confirmLogout() {
            return confirm("Apakah anda ingin logout?");
        }

        function confirmInsert() {
            return confirm("Apakah anda ingin menambahkan data?");
        }

        function confirmUpdate() {
            return confirm("Apakah anda ingin mengubah data?");
        }

        function confirmDelete() {
            return confirm("Apakah anda ingin menghapus data?");
        }
    </script>
</head>
<body>
<div class="kotax">
                <div class="teks">
                    <div class="d-flex justify-content-center">
                    <h2 class="title">DASHBOARD DATA</h2>
                    </div>    
                </div>
            </div>
    <br>
    <br>
    <div class="container box">
                <div class="tekskiri">
                <div class="d-flex justify-content-end align-items-center">
                        <form action="" method="post" onsubmit="return confirmLogout()">
                            <button class="btn btn-danger" type="submit" name="log-out">
                                Logout
                            </button>
                        </form>
                </div>
                        <h3 class="title">Data Mahasiswa</h3>
                </div>
            <br>
                
                <div class="box">
                <table class="table " id="data">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Prodi</th>
                                <th>Angkatan</th>
                                <th>Alamat</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                    <tbody>
                </div>
            <?php
            include ("koneksi.php");
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * from datamhs");
            while($d = mysqli_fetch_array($data)) {
                ?>

                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nim']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['prodi']; ?></td>
                    <td><?php echo $d['angkatan']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td>
                        <a class="btn btn-info" href="lihat.php?id=<?php echo $d['id']; ?>">Lihat</a>
                        <a class="btn btn-info" href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
                        <a class="btn btn-info" onclick="return confirmDelete()" href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
                    </td>
                </tr>
                
                <?php
            }
            ?>
            </table>
            <div class="d-flex justify-content-center align-items-center p-2 bd-highlight">
                <form action="tambahdata.php" method="post">
                    <button class="ms-3 btn btn-success " type="submit" name="tambah">
                        Tambah Data
                    </button>
                </form>
            </div>
    </div>
</body>
</html>