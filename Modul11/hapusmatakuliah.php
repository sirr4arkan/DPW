<?php
  include("koneksi.php");

  if (isset($_GET["kodeMK"])) {
    $kodeMK = $_GET["kodeMK"];

    $query = "DELETE FROM t_matakuliah WHERE kodeMK='$kodeMK'";
    $hasil_query = mysqli_query($link, $query);

    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($link).
        " - ".mysqli_error($link));
    }
  }

  header("location:viewmatakuliah.php?msg=Data mata kuliah berhasil dihapus!");
?>