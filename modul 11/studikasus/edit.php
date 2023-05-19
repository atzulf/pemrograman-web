<?php
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $query = mysqli_query($koneksi, "SELECT * FROM data_mahasiswa WHERE id = '$id'");
        $data = mysqli_fetch_array($query);
        $route = "update";
    }
    
    if (isset($_POST['update_data'])) {
        $id = $_POST['id'];
        $nama = $_POST['Nama'];
        $nim = $_POST['NIM'];
        $alamat = $_POST['Alamat'];
    
        $query = mysqli_query($koneksi, "UPDATE data_mahasiswa SET Nama = '$nama', NIM = '$nim', Alamat = '$alamat' WHERE id = '$id'");
    
        if ($query) {
            $message = (object) [
                'type' => 'success',
                'text' => 'Berhasil mengubah data'
            ];
            header("refresh:2; url=dasboard.php");
        } else {
            echo "Gagal update data";
        }
    }
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
</head>
<body>
    <div class="box">
        <div class="box">
            <div class="teks">
                <h2>
                    Update Data Mahasiswa 
                </h2>
            </div>
        </div>
        <br>
        <div class="kotax">
                <form action="" method="post" onsubmit="return confirmUpdate()">
                    <input type="hidden" name="id" value="<?= $data['id'] ?> ">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" name="NIM" id="NIM" value="<?= $data['NIM'] ?>"required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="Nama" id="Nama" value="<?= $data['Nama'] ?>"required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="Alamat" class="form-control" id="Alamat" cols="30" rows="10" required><?= $data['Alamat'] ?></textarea>
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
        </div>
        <br>
        <br>
    </div>
    
</body>
</html>