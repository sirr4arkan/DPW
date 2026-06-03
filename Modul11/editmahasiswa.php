<?php
  include 'koneksi.php';

  if (isset($_GET['npm'])) {
    $npm = ($_GET["npm"]);

    $query = "SELECT * FROM t_mahasiswa WHERE npm='$npm'";
    $result = mysqli_query($link, $query);

    if(!$result){
      die ("Query Error: ".mysqli_errno($link).
        " - ".mysqli_error($link));
    }

    $data = mysqli_fetch_assoc($result);
  } else {
    header("location:viewmahasiswa.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa — SIA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="brand">SIA <span>| Sistem Informasi Akademik</span></div>
        <ul class="nav-links">
            <li><a href="index.php">🏠 Dashboard</a></li>
            <li><a href="viewdosen.php">👨‍🏫 Dosen</a></li>
            <li><a href="viewmahasiswa.php" class="active">🎓 Mahasiswa</a></li>
            <li><a href="viewmatakuliah.php">📚 Mata Kuliah</a></li>
        </ul>
    </nav>

    <!-- Page Header -->
    <div class="page-header fade-in">
        <h1>Edit Data Mahasiswa</h1>
        <p>Ubah informasi data mahasiswa</p>
    </div>

    <div class="card form-card fade-in">
        <div class="form-title">✏️ Edit Data Mahasiswa</div>
        <form action="proses_editmahasiswa.php" method="post">
            <input type="hidden" name="npm" value="<?php echo $data['npm']; ?>">
            <div class="form-group">
                <label for="namaMhs">Nama Mahasiswa</label>
                <input type="text" name="namaMhs" id="namaMhs" value="<?php echo $data['namaMhs']; ?>" required>
            </div>
            <div class="form-group">
                <label for="prodi">Program Studi</label>
                <input type="text" name="prodi" id="prodi" value="<?php echo $data['prodi']; ?>" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" value="<?php echo $data['alamat']; ?>" required>
            </div>
            <div class="form-group">
                <label for="noHP">No HP</label>
                <input type="tel" name="noHP" id="noHP" value="<?php echo $data['noHP']; ?>" required>
            </div>
            <div class="form-actions">
                <button type="submit" name="edit" class="btn btn-success">💾 Update Data</button>
                <a href="viewmahasiswa.php" class="btn btn-danger">← Batal</a>
            </div>
        </form>
    </div>

    <div class="footer">
        &copy; <?php echo date('Y'); ?> Sistem Informasi Akademik
    </div>
</body>
</html>