<?php
  include("koneksi.php");

  if (isset($_GET["idDosen"])) {
    $db = new Database();
    $con = $db->getConnection();
    
    $id = $_GET["idDosen"];

    $stmt = $con->prepare("DELETE FROM t_dosen WHERE idDosen = ?");
    $stmt->bind_param("i", $id);

    if (!$stmt->execute()) {
        die("Gagal menghapus data: " . $stmt->error);
    }
    
    $stmt->close();
    $con->close();
  }
  
  header("location:viewdosen.php?msg=Data dosen berhasil dihapus!");
?>