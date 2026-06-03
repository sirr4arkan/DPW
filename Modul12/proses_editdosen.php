<?php
  if (isset($_POST['edit'])) {
    include("koneksi.php");
    $db = new Database();
    $con = $db->getConnection();

    $id = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    $stmt = $con->prepare("UPDATE t_dosen SET namaDosen = ?, noHP = ? WHERE idDosen = ?");
    $stmt->bind_param("ssi", $namaDosen, $noHP, $id);

    if (!$stmt->execute()) {
        die("Query gagal dijalankan: " . $stmt->error);
    }
    
    $stmt->close();
    $con->close();
  }

  header("location:viewdosen.php?msg=Data dosen berhasil diperbarui!");
?>