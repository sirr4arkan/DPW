<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa (OOP) — SIA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <div class="brand">SIA OOP <span>| Sistem Informasi Akademik</span></div>
        <ul class="nav-links">
            <li><a href="index.php">🏠 Dashboard</a></li>
            <li><a href="viewdosen.php">👨‍🏫 Dosen</a></li>
            <li><a href="viewmahasiswa.php" class="active">🎓 Mahasiswa</a></li>
            <li><a href="viewmatakuliah.php">📚 Mata Kuliah</a></li>
        </ul>
    </nav>

    <div class="page-header fade-in">
        <h1>Tambah Data Mahasiswa (OOP)</h1>
        <p>Masukkan data mahasiswa baru</p>
    </div>

    <div class="card form-card fade-in">
        <div class="form-title">📝 Form Input Mahasiswa</div>
        <form action="proses_inputmahasiswa.php" method="post">
            <div class="form-group">
                <label for="npm">NPM</label>
                <input type="number" name="npm" id="npm" placeholder="Masukkan NPM" required>
            </div>
            <div class="form-group">
                <label for="namaMhs">Nama Mahasiswa</label>
                <input type="text" name="namaMhs" id="namaMhs" placeholder="Masukkan nama lengkap mahasiswa" required>
            </div>
            <div class="form-group">
                <label for="prodi">Program Studi</label>
                <input type="text" name="prodi" id="prodi" placeholder="Contoh: Teknik Informatika" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" placeholder="Masukkan alamat lengkap" required>
            </div>
            <div class="form-group">
                <label for="noHP">No HP</label>
                <input type="tel" name="noHP" id="noHP" placeholder="Contoh: 081234567890" required>
            </div>
            <div class="form-actions">
                <button type="submit" name="tambah" class="btn btn-success">💾 Simpan Data</button>
                <a href="viewmahasiswa.php" class="btn btn-danger">← Batal</a>
            </div>
        </form>
    </div>

    <div class="footer">
        &copy; <?php echo date('Y'); ?> Sistem Informasi Akademik
    </div>
</body>
</html>