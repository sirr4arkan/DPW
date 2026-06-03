<?php
  if (isset($_POST['edit'])) {
    include("koneksi.php");

    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks = $_POST['sks'];
    $jam = $_POST['jam'];

    $query = "UPDATE t_matakuliah SET namaMK = '$namaMK', sks = '$sks', jam = '$jam' WHERE kodeMK = '$kodeMK'";
    $result = mysqli_query($link, $query);

    if(!$result) {
      die ("Query gagal dijalankan: ".mysqli_errno($link).
        " - ".mysqli_error($link));
    }
  }

  header("location:viewmatakuliah.php?msg=Data mata kuliah berhasil diperbarui!");
?>