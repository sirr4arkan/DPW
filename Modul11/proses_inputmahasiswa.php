<?php
  include("koneksi.php");

  if (isset($_POST["tambah"])) {
    $npm = $_POST["npm"];
    $namaMhs = $_POST["namaMhs"];
    $prodi = $_POST["prodi"];
    $alamat = $_POST["alamat"];
    $noHP = $_POST["noHP"];

    $query = "INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP) VALUES ('$npm', '$namaMhs', '$prodi', '$alamat', '$noHP')";
    $hasil_query = mysqli_query($link, $query);

    if(!$hasil_query) {
      die ("Gagal menambah data: ".mysqli_errno($link).
      " - ".mysqli_error($link));
    }
  }

  header("location:viewmahasiswa.php?msg=Data mahasiswa berhasil ditambahkan!");
?>