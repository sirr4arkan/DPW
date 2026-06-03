<?php
// Session-based login system with exception handling
session_start();

// Fungsi untuk membersihkan input
function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$nameErr = $passErr = "";
$loginMsg = "";

// Cek apakah sudah login
if (isset($_SESSION["username"])) {
    // Jika sudah login, tampilkan halaman dashboard
    if (isset($_GET["logout"])) {
        session_destroy();
        header("Location: session_login.php");
        exit();
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <style>
            .error { color: red; font-size: 12px; }
            .success { color: green; }
        </style>
    </head>
    <body>
        <h2>Dashboard</h2>
        <p class="success">Selamat datang, <strong><?php echo $_SESSION["username"]; ?></strong>!</p>
        <p>Session ID: <?php echo session_id(); ?></p>
        <a href="session_login.php?logout=1">Logout</a>
    </body>
    </html>
    <?php
    exit();
}

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        if (empty($_POST["u"])) {
            throw new Exception("Masukkan username!");
        }
        if (empty($_POST["p"])) {
            throw new Exception("Masukkan password!");
        }

        $username = bersihkan_input($_POST["u"]);
        $password = bersihkan_input($_POST["p"]);

        // Simulasi validasi login (username: admin, password: admin)
        if ($username == "admin" && $password == "admin") {
            $_SESSION["username"] = $username;
            header("Location: session_login.php");
            exit();
        } else {
            throw new Exception("Username atau password salah!");
        }
    } catch (Exception $e) {
        $loginMsg = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login dengan Session</title>
    <style>
        .error { color: red; font-size: 12px; }
    </style>
</head>
<body>
    <h2>Login dengan Session</h2>
    
    <?php if (!empty($loginMsg)) { ?>
        <p class="error"><?php echo $loginMsg; ?></p>
    <?php } ?>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Username: <input type="text" name="u">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        Password: <input type="password" name="p">
        <span class="error">* <?php echo $passErr; ?></span>
        <br><br>
        <input type="submit" value="Login">
    </form>
    <p><small>Username: admin, Password: admin</small></p>
</body>
</html>