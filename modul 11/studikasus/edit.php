<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM data_mahasiswa WHERE id = '$id'");
    $data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
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

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#data').DataTable();
        });

        function confirmUpdate() {
            return confirm("Apakah anda akan mengubah data?");
        }

    </script>
</head>
<body>
    <div class="box">

        <div class="box">
            <div class="teks">
                <h2>
                    Update Data Mahasiswa milik <?= $data['Nama'] ?>
                </h2>
            </div>
        </div>

        <div class="box">
        <a href="dasboard.php" class= "btn btn-primary">Lihat Semua Data</a>
        <br>
        <br>

        <div class="kotax">
            <?php
            $data = mysqli_query($koneksi, "SELECT * from data_mahasiswa WHERE id='$id'") or die();
            $no = 1;
            while($d = mysqli_fetch_array($data)) {
                ?>
            <form action="update.php" method="post" onsubmit="return confirmUpdate()">
                <input type="hidden" name="id" value="<?php echo $d['id'] ?> ">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" name="NIM" id="NIM" value="<?php echo $d['NIM'] ?>" required>
                    </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="Nama" id="Nama" value="<?php echo $d['Nama'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="Alamat" class="form-control" id="Alamat" cols="30" rows="10" required><?php echo $d['Alamat'] ?></textarea>
                        </div>
                        <br>
                        <br>
                        <div class="flex">
                            <button class="btn btn-primary" type="submit" name="update_data">
                                Perbarui
                            </button>
                            <a href="dasboard.php" class="btn btn-danger">
                                Batal
                            </a>
                        </div>
                    </form>
            <?php
            }
            ?>
        </div>
    </div>
        <br>
        <br>
</body>
</html>