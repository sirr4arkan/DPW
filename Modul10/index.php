<?php
require_once ('kelas/Manusia.php');

$andi = new Manusia();
$andi->setNama("Andi Pratama");
$andi->setUmur(20);

$budi = new Manusia();
$budi->setNama("Budi Santoso");
$budi->setUmur(22);

echo "Identitas Budi:<br>";
echo "Nama: " . $budi->getNama() . "<br>";

echo "<br>Identitas Anda:<br>";
echo "Nama: " . $andi->getNama() . "<br>";
echo "Umur: " . $andi->getUmur() . " tahun<br>";
echo "NIK: " . $andi->getNIK() . "<br>";
?>