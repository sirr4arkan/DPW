<?php
  include("koneksi.php");

  // Memanggil method getCount dari objek $akademik
  $countDosen = $akademik->getCount("t_dosen");
  $countMhs   = $akademik->getCount("t_mahasiswa");
  $countMK    = $akademik->getCount("t_matakuliah");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik</title>
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
                <li class="active"><a href="index.php">🏠 Dashboard Akademik</a></li>
                
                <div class="menu-header">Master Data</div>
                <li><a href="viewdosen.php">👨‍🏫 Data Dosen</a></li>
                <li><a href="viewmahasiswa.php">🎓 Data Mahasiswa</a></li>
                <li><a href="viewmatakuliah.php">📚 Data Mata Kuliah</a></li>
            </ul>
        </aside>

        <div class="main-body">
            
            <header class="top-header">
                <button class="toggle-btn" id="openSidebar">☰</button>
                <div class="header-title">Sistem Informasi Akademik</div>
            </header>

            <main class="content-area fade-in">
                <div class="breadcrumb-container">
                    <div class="path">Home » Dashboard</div>
                    <h1>Dashboard</h1>
                </div>

                <div class="stats-grid">
                    <a href="viewdosen.php" class="stat-card dosen">
                        <div class="stat-info">
                            <div class="stat-value"><?php echo $countDosen; ?></div>
                            <div class="stat-label">Total Data Dosen</div>
                        </div>
                        <div class="stat-icon">👨‍🏫</div>
                    </a>
                    
                    <a href="viewmahasiswa.php" class="stat-card mahasiswa">
                        <div class="stat-info">
                            <div class="stat-value"><?php echo $countMhs; ?></div>
                            <div class="stat-label">Total Data Mahasiswa</div>
                        </div>
                        <div class="stat-icon">🎓</div>
                    </a>
                    
                    <a href="viewmatakuliah.php" class="stat-card matakuliah">
                        <div class="stat-info">
                            <div class="stat-value"><?php echo $countMK; ?></div>
                            <div class="stat-label">Total Mata Kuliah</div>
                        </div>
                        <div class="stat-icon">📚</div>
                    </a>
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