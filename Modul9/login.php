<?php
// Fungsi untuk membersihkan input
function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$nameErr = $passErr = "";
$name = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["u"])) {
        $nameErr = "masukkan username";
    } else {
        $name = bersihkan_input($_POST["u"]);
    }
    if (empty($_POST["p"])) {
        $passErr = "masukkan password";
    } else {
        $pass = bersihkan_input($_POST["p"]);
    }

    // Jika tidak ada error, tampilkan pesan sukses
    if (empty($nameErr) && empty($passErr)) {
        echo "<p style='color:green;'>Login berhasil! Selamat datang, $name</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        .error { color: red; font-size: 12px; }
    </style>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Username: <input type="text" name="u">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        Password: <input type="password" name="p">
        <span class="error">* <?php echo $passErr; ?></span>
        <br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>