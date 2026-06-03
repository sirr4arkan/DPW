<?php
  include 'koneksi.php';

  if (isset($_GET['kodeMK'])) {
    $kodeMK = ($_GET["kodeMK"]);

    $query = "SELECT * FROM t_matakuliah WHERE kodeMK='$kodeMK'";
    $result = mysqli_query($link, $query);

    if(!$result){
      die ("Query Error: ".mysqli_errno($link).
        " - ".mysqli_error($link));
    }

    $data = mysqli_fetch_assoc($result);
  } else {
    header("location:viewmatakuliah.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mata Kuliah — SIA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="brand">SIA <span>| Sistem Informasi Akademik</span></div>
        <ul class="nav-links">
            <li><a href="index.php">🏠 Dashboard</a></li>
            <li><a href="viewdosen.php">👨‍🏫 Dosen</a></li>
            <li><a href="viewmahasiswa.php">🎓 Mahasiswa</a></li>
            <li><a href="viewmatakuliah.php" class="active">📚 Mata Kuliah</a></li>
        </ul>
    </nav>

    <!-- Page Header -->
    <div class="page-header fade-in">
        <h1>Edit Data Mata Kuliah</h1>
        <p>Ubah informasi data mata kuliah</p>
    </div>

    <div class="card form-card fade-in">
        <div class="form-title">✏️ Edit Data Mata Kuliah</div>
        <form action="proses_editmatakuliah.php" method="post">
            <input type="hidden" name="kodeMK" value="<?php echo $data['kodeMK']; ?>">
            <div class="form-group">
                <label for="namaMK">Nama Mata Kuliah</label>
                <input type="text" name="namaMK" id="namaMK" value="<?php echo $data['namaMK']; ?>" required>
            </div>
            <div class="form-group">
                <label for="sks">SKS</label>
                <input type="number" name="sks" id="sks" value="<?php echo $data['sks']; ?>" required>
            </div>
            <div class="form-group">
                <label for="jam">Jam</label>
                <input type="number" name="jam" id="jam" value="<?php echo $data['jam']; ?>" required>
            </div>
            <div class="form-actions">
                <button type="submit" name="edit" class="btn btn-success">💾 Update Data</button>
                <a href="viewmatakuliah.php" class="btn btn-danger">← Batal</a>
            </div>
        </form>
    </div>

    <div class="footer">
        &copy; <?php echo date('Y'); ?> Sistem Informasi Akademik
    </div>
</body>
</html>