<?php
    include "koneksi.php";
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM data_mahasiswa WHERE id='$id'") or die();

    header("location:dasboard.php?pesan=hapus");
?>