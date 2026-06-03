<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Dosen — SIA</title>
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
        <h1>Tambah Data Dosen</h1>
        <p>Masukkan data dosen baru</p>
    </div>

    <div class="card form-card fade-in">
        <div class="form-title">📝 Form Input Dosen</div>
        <form action="proses_inputdosen.php" method="post">
            <div class="form-group">
                <label for="namaDosen">Nama Dosen</label>
                <input type="text" name="namaDosen" id="namaDosen" placeholder="Masukkan nama lengkap dosen" required>
            </div>
            <div class="form-group">
                <label for="noHP">No HP</label>
                <input type="tel" name="noHP" id="noHP" placeholder="Contoh: 081222333444" required>
            </div>
            <div class="form-actions">
                <button type="submit" name="tambah" class="btn btn-success">💾 Simpan Data</button>
                <a href="viewdosen.php" class="btn btn-danger">← Batal</a>
            </div>
        </form>
    </div>

    <div class="footer">
        &copy; <?php echo date('Y'); ?> Sistem Informasi Akademik
    </div>
</body>
</html>