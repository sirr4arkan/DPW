<?php
  include("koneksi.php");

  if (isset($_POST["tambah"])) {
    $kodeMK = $_POST["kodeMK"];
    $namaMK = $_POST["namaMK"];
    $sks = $_POST["sks"];
    $jam = $_POST["jam"];

    $query = "INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam) VALUES ('$kodeMK', '$namaMK', '$sks', '$jam')";
    $hasil_query = mysqli_query($link, $query);

    if(!$hasil_query) {
      die ("Gagal menambah data: ".mysqli_errno($link).
      " - ".mysqli_error($link));
    }
  }

  header("location:viewmatakuliah.php?msg=Data mata kuliah berhasil ditambahkan!");
?>