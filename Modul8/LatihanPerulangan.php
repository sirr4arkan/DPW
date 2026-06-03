<?php
// LatihanPerulangan.php
// Menampilkan pola segitiga bintang dan for dengan break

echo "<h2>Pola Segitiga Bintang</h2>";
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";

// for dengan break
echo "<h2>For dengan Break</h2>";
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "Nomor : $x <br>";
}
?>