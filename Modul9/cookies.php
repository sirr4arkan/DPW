<?php
// Memanfaatkan cookies untuk menyimpan data identitas

// Set cookies (harus sebelum output HTML)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["simpan"])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $nim = $_POST["nim"];
    
    // Set cookies yang berlaku selama 1 hari (86400 detik)
    setcookie("nama", $nama, time() + 86400, "/");
    setcookie("email", $email, time() + 86400, "/");
    setcookie("nim", $nim, time() + 86400, "/");
    
    // Redirect untuk menghindari form resubmission
    header("Location: cookies.php");
    exit();
}

// Hapus cookies
if (isset($_GET["hapus"])) {
    setcookie("nama", "", time() - 3600, "/");
    setcookie("email", "", time() - 3600, "/");
    setcookie("nim", "", time() - 3600, "/");
    header("Location: cookies.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies - Identitas</title>
</head>
<body>
    <h2>Cookies - Menyimpan Identitas</h2>

    <?php if (isset($_COOKIE["nama"]) && !empty($_COOKIE["nama"])) { ?>
        <h3>Data dari Cookies:</h3>
        <p>Nama: <?php echo htmlspecialchars($_COOKIE["nama"]); ?></p>
        <p>Email: <?php echo htmlspecialchars($_COOKIE["email"]); ?></p>
        <p>NIM: <?php echo htmlspecialchars($_COOKIE["nim"]); ?></p>
        <a href="cookies.php?hapus=1">Hapus Cookies</a>
    <?php } else { ?>
        <h3>Belum ada cookies. Silakan isi data:</h3>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Nama: <input type="text" name="nama"><br><br>
            Email: <input type="email" name="email"><br><br>
            NIM: <input type="text" name="nim"><br><br>
            <input type="submit" name="simpan" value="Simpan ke Cookies">
        </form>
    <?php } ?>
</body>
</html>