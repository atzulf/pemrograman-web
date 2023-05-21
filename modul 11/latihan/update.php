<?php
    include "koneksi.php";
    $id = $_POST['id'];
    $nim = $_POST['NIM'];
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];

    mysqli_query($koneksi, "UPDATE data_mahasiswa SET NIM='$nim', Nama='$nama', Alamat='$alamat' WHERE id='$id'");

    header("location:dasboard.php?pesan=update");
?>