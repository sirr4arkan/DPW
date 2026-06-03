<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mata Kuliah (OOP) — SIA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <div class="brand">SIA OOP <span>| Sistem Informasi Akademik</span></div>
        <ul class="nav-links">
            <li><a href="index.php">🏠 Dashboard</a></li>
            <li><a href="viewdosen.php">👨‍🏫 Dosen</a></li>
            <li><a href="viewmahasiswa.php">🎓 Mahasiswa</a></li>
            <li><a href="viewmatakuliah.php" class="active">📚 Mata Kuliah</a></li>
        </ul>
    </nav>

    <div class="page-header fade-in">
        <h1>Tambah Data Mata Kuliah (OOP)</h1>
        <p>Masukkan data mata kuliah baru</p>
    </div>

    <div class="card form-card fade-in">
        <div class="form-title">📝 Form Input Mata Kuliah</div>
        <form action="proses_inputmatakuliah.php" method="post">
            <div class="form-group">
                <label for="kodeMK">Kode Mata Kuliah</label>
                <input type="number" name="kodeMK" id="kodeMK" placeholder="Masukkan kode MK" required>
            </div>
            <div class="form-group">
                <label for="namaMK">Nama Mata Kuliah</label>
                <input type="text" name="namaMK" id="namaMK" placeholder="Masukkan nama mata kuliah" required>
            </div>
            <div class="form-group">
                <label for="sks">SKS</label>
                <input type="number" name="sks" id="sks" placeholder="Masukkan jumlah SKS" required>
            </div>
            <div class="form-group">
                <label for="jam">Jam</label>
                <input type="number" name="jam" id="jam" placeholder="Masukkan jumlah jam" required>
            </div>
            <div class="form-actions">
                <button type="submit" name="tambah" class="btn btn-success">💾 Simpan Data</button>
                <a href="viewmatakuliah.php" class="btn btn-danger">← Batal</a>
            </div>
        </form>
    </div>

    <div class="footer">
        &copy; <?php echo date('Y'); ?> Sistem Informasi Akademik
    </div>
</body>
</html>