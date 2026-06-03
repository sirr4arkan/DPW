<?php
  include("koneksi.php");

  // Fitur pencarian
  $search = "";
  $whereClause = "";
  if (isset($_GET['search']) && !empty($_GET['search'])) {
      $search = mysqli_real_escape_string($link, $_GET['search']);
      $whereClause = " WHERE namaMhs LIKE '%$search%'";
  }

  $query = "SELECT * FROM t_mahasiswa" . $whereClause . " ORDER BY npm ASC";
  $result = mysqli_query($link, $query);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa — SIA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="app-wrapper">
        
        <div class="sidebar-overlay" id="sidebarOverlay"></div>

        <aside class="sidebar" id="sidebar">
            <div class="brand">
                <div>SIA <span>Academic</span></div>
                <button class="close-btn" id="closeSidebar">&times;</button>
            </div>
            
            <div class="sidebar-profile">
                <div class="avatar">👤</div>
                <div>
                    <div>Administrator</div>
                    <div style="font-size:0.75rem; color:#94a3b8; font-weight:400;">admin@sia.edu</div>
                </div>
            </div>

            <ul class="sidebar-menu">
                <div class="menu-header">Dashboard</div>
                <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>"><a href="index.php">🏠 Dashboard Akademik</a></li>
                
                <div class="menu-header">Master Data</div>
                <li class="<?php echo (in_array(basename($_SERVER['PHP_SELF']), ['viewdosen.php', 'inputdosen.php', 'editdosen.php'])) ? 'active' : ''; ?>"><a href="viewdosen.php">👨‍🏫 Data Dosen</a></li>
                <li class="<?php echo (in_array(basename($_SERVER['PHP_SELF']), ['viewmahasiswa.php', 'inputmahasiswa.php', 'editmahasiswa.php'])) ? 'active' : ''; ?>"><a href="viewmahasiswa.php">🎓 Data Mahasiswa</a></li>
                <li class="<?php echo (in_array(basename($_SERVER['PHP_SELF']), ['viewmatakuliah.php', 'inputmatakuliah.php', 'editmatakuliah.php'])) ? 'active' : ''; ?>"><a href="viewmatakuliah.php">📚 Data Mata Kuliah</a></li>
            </ul>
        </aside>

        <div class="main-body">
            
            <header class="top-header">
                <button class="toggle-btn" id="openSidebar">☰</button>
                <div class="header-title">Sistem Informasi Akademik</div>
            </header>

            <main class="content-area fade-in">
                <div class="breadcrumb-container">
                    <div class="path">Home » Master Data</div>
                    <h1>Data Mahasiswa</h1>
                </div>

                <div class="card">
                    <div class="actions-bar">
                        <form class="search-bar" action="viewmahasiswa.php" method="get">
                            <input type="text" name="search" placeholder="Cari nama mahasiswa..." value="<?php echo htmlspecialchars($search); ?>">
                            <button type="submit">🔍 Cari</button>
                        </form>
                        <a href="inputmahasiswa.php" class="btn btn-primary">➕ Tambah Mahasiswa</a>
                    </div>

                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>NPM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Prodi</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                              if (mysqli_num_rows($result) > 0) {
                                  while ($data = mysqli_fetch_assoc($result)) {
                                      echo "<tr>";
                                      echo "<td>$data[npm]</td>";
                                      echo "<td>" . htmlspecialchars($data['namaMhs']) . "</td>";
                                      echo "<td>" . htmlspecialchars($data['prodi']) . "</td>";
                                      echo "<td>" . htmlspecialchars($data['alamat']) . "</td>";
                                      echo "<td>" . htmlspecialchars($data['noHP']) . "</td>";
                                      echo '<td class="action-links">
                                          <a href="editmahasiswa.php?npm='.$data['npm'].'" class="btn btn-warning btn-sm">✏️ Edit</a>
                                          <a href="hapusmahasiswa.php?npm='.$data['npm'].'" class="btn btn-danger btn-sm"
                                              onclick="return confirm(\'Anda yakin akan menghapus data?\')">🗑️ Hapus</a>
                                      </td>';
                                      echo "</tr>";
                                  }
                              } else {
                                  echo '<tr><td colspan="6"><div class="empty-state"><div class="icon">📭</div><p>Belum ada data mahasiswa' . ($search ? ' untuk pencarian "' . htmlspecialchars($search) . '"' : '') . '</p></div></td></tr>';
                              }
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>

            <footer class="footer">
                &copy; <?php echo date('Y'); ?> Sistem Informasi Akademik — Sidebar Off-Canvas Model
            </footer>
        </div>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        const openBtn = document.getElementById('openSidebar');
        const closeBtn = document.getElementById('closeSidebar');

        function toggleSidebar() {
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
        }

        openBtn.addEventListener('click', toggleSidebar);
        closeBtn.addEventListener('click', toggleSidebar);
        overlay.addEventListener('click', toggleSidebar);
    </script>
</body>
</html>