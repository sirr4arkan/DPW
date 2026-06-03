<?php
  include("koneksi.php");

  if (isset($_GET["kodeMK"])) {
    $db = new Database();
    $con = $db->getConnection();
    
    $kodeMK = $_GET["kodeMK"];

    $stmt = $con->prepare("DELETE FROM t_matakuliah WHERE kodeMK = ?");
    $stmt->bind_param("i", $kodeMK);

    if (!$stmt->execute()) {
        die("Gagal menghapus data: " . $stmt->error);
    }
    
    $stmt->close();
    $con->close();
  }
  
  header("location:viewmatakuliah.php?msg=Data mata kuliah berhasil dihapus!");
?>