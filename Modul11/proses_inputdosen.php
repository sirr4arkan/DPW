<?php
  // buka koneksi dengan MySQL
  include("koneksi.php");

  // mengecek apakah tombol tambah sudah diklik
  if (isset($_POST["tambah"])) {

    // mengambil data dari form input
    $nama = $_POST["namaDosen"];
    $hp = $_POST["noHP"];

    // jalankan query INSERT untuk menambah data ke database
    $query = "INSERT INTO t_dosen (namaDosen, noHP) VALUES ('$nama', '$hp')";
    $hasil_query = mysqli_query($link, $query);

    // periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menambah data: ".mysqli_errno($link).
      " - ".mysqli_error($link));
    }
  }

  // melakukan redirect ke halaman viewdosen.php
  header("location:viewdosen.php?msg=Data dosen berhasil ditambahkan!");
?>