<?php
  if (isset($_POST['edit'])) {
    include("koneksi.php");

    $npm = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];

    $query = "UPDATE t_mahasiswa SET namaMhs = '$namaMhs', prodi = '$prodi', alamat = '$alamat', noHP = '$noHP' WHERE npm = '$npm'";
    $result = mysqli_query($link, $query);

    if(!$result) {
      die ("Query gagal dijalankan: ".mysqli_errno($link).
        " - ".mysqli_error($link));
    }
  }

  header("location:viewmahasiswa.php?msg=Data mahasiswa berhasil diperbarui!");
?>