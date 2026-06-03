<?php
  include("koneksi.php");

  if (isset($_GET["npm"])) {
    $npm = $_GET["npm"];

    $query = "DELETE FROM t_mahasiswa WHERE npm='$npm'";
    $hasil_query = mysqli_query($link, $query);

    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($link).
        " - ".mysqli_error($link));
    }
  }

  header("location:viewmahasiswa.php?msg=Data mahasiswa berhasil dihapus!");
?>