<?php
  include("koneksi.php");

  if (isset($_POST["tambah"])) {
    $npm     = $_POST["npm"];
    $namaMhs = $_POST["namaMhs"];
    $prodi   = $_POST["prodi"];
    $alamat  = $_POST["alamat"];
    $noHP    = $_POST["noHP"];

    // Gunakan tanda tanya (?) sebagai tempat persinggahan data
    $query = "INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($link, $query);

    // Bind parameter (s = string/text). Karena ada 5 variabel, kita pakai "sssss"
    mysqli_stmt_bind_param($stmt, "sssss", $npm, $namaMhs, $prodi, $alamat, $noHP);

    // Eksekusi query
    $hasil_query = mysqli_stmt_execute($stmt);

    if(!$hasil_query) {
      die ("Gagal menambah data: " . mysqli_stmt_error($stmt));
    }

    mysqli_stmt_close($stmt);

    header("location:viewmahasiswa.php?msg=Data mahasiswa berhasil ditambahkan!");
    exit();
  }
?>