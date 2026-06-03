<?php
  // memanggil file koneksi.php untuk membuat koneksi
  include 'koneksi.php';

  // mengecek apakah di url ada nilai GET idDosen
  if (isset($_GET['idDosen'])) {
    // ambil nilai idDosen dari url dan disimpan dalam variabel $id
    $id = ($_GET["idDosen"]);

    // menampilkan data t_dosen dari database yang mempunyai idDosen=$id
    $query = "SELECT * FROM t_dosen WHERE idDosen='$id'";
    $result = mysqli_query($link, $query);
    // mengecek apakah query gagal
    if(!$result){
      die ("Query Error: ".mysqli_errno($link).
        " - ".mysqli_error($link));
    }

    // mengambil data dari database dan membuat variabel-variabel utk menampung data
    // variabel ini nantinya akan ditampilkan pada form
    $data = mysqli_fetch_assoc($result);
    $idDosen = $data["idDosen"];
    $namaDosen = $data["namaDosen"];
    $noHP = $data["noHP"];
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke viewdosen.php
    header("location:viewdosen.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Dosen — SIA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="brand">SIA <span>| Sistem Informasi Akademik</span></div>
        <ul class="nav-links">
            <li><a href="index.php">🏠 Dashboard</a></li>
            <li><a href="viewdosen.php" class="active">👨‍🏫 Dosen</a></li>
            <li><a href="viewmahasiswa.php">🎓 Mahasiswa</a></li>
            <li><a href="viewmatakuliah.php">📚 Mata Kuliah</a></li>
        </ul>
    </nav>

    <!-- Page Header -->
    <div class="page-header fade-in">
        <h1>Edit Data Dosen</h1>
        <p>Ubah informasi data dosen</p>
    </div>

    <div class="card form-card fade-in">
        <div class="form-title">✏️ Edit Data Dosen</div>
        <form action="proses_editdosen.php" method="post">
            <input type="hidden" name="idDosen" value="<?php echo $data['idDosen']; ?>">
            <div class="form-group">
                <label for="namaDosen">Nama Dosen</label>
                <input type="text" name="namaDosen" id="namaDosen" value="<?php echo $data['namaDosen']; ?>" required>
            </div>
            <div class="form-group">
                <label for="noHP">No HP</label>
                <input type="tel" name="noHP" id="noHP" value="<?php echo $data['noHP']; ?>" required>
            </div>
            <div class="form-actions">
                <button type="submit" name="edit" class="btn btn-success">💾 Update Data</button>
                <a href="viewdosen.php" class="btn btn-danger">← Batal</a>
            </div>
        </form>
    </div>

    <div class="footer">
        &copy; <?php echo date('Y'); ?> Sistem Informasi Akademik
    </div>
</body>
</html>