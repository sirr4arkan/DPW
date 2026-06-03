<?php
// Upload gambar dengan PHP

$target_dir = "gambar/";
$uploadOk = 1;
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["gambar"])) {
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Cek apakah file adalah gambar
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check !== false) {
        $pesan .= "File adalah gambar - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        $pesan .= "File bukan gambar.<br>";
        $uploadOk = 0;
    }

    // Cek apakah file sudah ada
    if (file_exists($target_file)) {
        $pesan .= "Maaf, file sudah ada.<br>";
        $uploadOk = 0;
    }

    // Cek ukuran file (maks 500KB)
    if ($_FILES["gambar"]["size"] > 500000) {
        $pesan .= "Maaf, ukuran file terlalu besar.<br>";
        $uploadOk = 0;
    }

    // Hanya izinkan format tertentu
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $pesan .= "Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.<br>";
        $uploadOk = 0;
    }

    // Cek apakah $uploadOk di-set ke 0 oleh error
    if ($uploadOk == 0) {
        $pesan .= "Maaf, file tidak bisa diupload.<br>";
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            $pesan .= "File " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . " berhasil diupload.<br>";
        } else {
            $pesan .= "Maaf, terjadi error saat upload file.<br>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Gambar</title>
</head>
<body>
    <h2>Upload Gambar</h2>
    
    <?php if (!empty($pesan)) { echo "<p>$pesan</p>"; } ?>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        Pilih gambar untuk diupload:
        <input type="file" name="gambar" id="gambar"><br><br>
        <input type="submit" value="Upload Gambar" name="submit">
    </form>
</body>
</html>