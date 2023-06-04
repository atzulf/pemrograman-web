<?php
    include "koneksi.php";
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $angkatan = $_POST['angkatan'];
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi, "UPDATE datamhs SET nim='$nim',nama='$nama',prodi='$prodi' ,angkatan='$angkatan' ,alamat='$alamat' WHERE id='$id'");

    header("location:dashboard.php?pesan=update");
?>