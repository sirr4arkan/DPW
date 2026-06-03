<?php
// Galeri gambar dari folder gambar

echo "<h2>Galeri Gambar</h2>";
echo "<div style='display: flex; flex-wrap: wrap; gap: 10px;'>";

$fileList = glob('gambar/*');
foreach ($fileList as $filename) {
    if (is_file($filename)) {
        echo "<div style='border: 1px solid #ccc; padding: 5px;'>";
        echo "<img src='$filename' width='200' height='150' style='object-fit: cover;'><br>";
        echo "<small>" . basename($filename) . "</small>";
        echo "</div>";
    }
}

echo "</div>";
?>