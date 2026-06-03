<?php
// Modul 9 - Soal 9: Array dengan index nama dan umur, konversi ke JSON

$data = array(
    array("nama" => "Andi", "umur" => 20),
    array("nama" => "Budi", "umur" => 21),
    array("nama" => "Cici", "umur" => 19),
    array("nama" => "Dani", "umur" => 22),
    array("nama" => "Eka", "umur" => 20),
    array("nama" => "Fani", "umur" => 23),
    array("nama" => "Gina", "umur" => 21),
    array("nama" => "Hadi", "umur" => 24),
    array("nama" => "Ika", "umur" => 19),
    array("nama" => "Joko", "umur" => 22),
    array("nama" => "Kiki", "umur" => 20),
    array("nama" => "Lina", "umur" => 21),
    array("nama" => "Mira", "umur" => 23),
    array("nama" => "Nana", "umur" => 18),
    array("nama" => "Oka", "umur" => 25)
);

// Konversi ke JSON
$json = json_encode($data, JSON_PRETTY_PRINT);

echo "<h2>Data Array (Nama dan Umur)</h2>";
echo "<h3>Data dalam format Array:</h3>";
echo "<pre>";
print_r($data);
echo "</pre>";

echo "<h3>Data dalam format JSON:</h3>";
echo "<pre>";
echo $json;
echo "</pre>";
?>