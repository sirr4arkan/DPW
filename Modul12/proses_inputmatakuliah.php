<?php
  include("koneksi.php");
  
  if (isset($_POST["tambah"])) {
    $db = new Database();
    $con = $db->getConnection();

    $kodeMK = $_POST["kodeMK"];
    $namaMK = $_POST["namaMK"];
    $sks = $_POST["sks"];
    $jam = $_POST["jam"];

    $stmt = $con->prepare("INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isii", $kodeMK, $namaMK, $sks, $jam);

    if (!$stmt->execute()) {
        die("Gagal menambah data: " . $stmt->error);
    }
    
    $stmt->close();
    $con->close();
  }

  header("location:viewmatakuliah.php?msg=Data mata kuliah berhasil ditambahkan!");
?>