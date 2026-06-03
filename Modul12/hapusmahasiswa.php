<?php
  include("koneksi.php");

  if (isset($_GET["npm"])) {
    $db = new Database();
    $con = $db->getConnection();
    
    $npm = $_GET["npm"];

    $stmt = $con->prepare("DELETE FROM t_mahasiswa WHERE npm = ?");
    $stmt->bind_param("i", $npm);

    if (!$stmt->execute()) {
        die("Gagal menghapus data: " . $stmt->error);
    }
    
    $stmt->close();
    $con->close();
  }
  
  header("location:viewmahasiswa.php?msg=Data mahasiswa berhasil dihapus!");
?>