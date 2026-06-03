<?php
require_once ('kelas/Mahasiswa.php');

$mhs = new Mahasiswa("Nama Anda");
$mhs->setNIM("123456789");
$mhs->setJurusan("Teknik Informatika");
$mhs->setKelas("2A");

echo "<h3>Data Mahasiswa</h3>";
echo "Nama: " . $mhs->getNama() . "<br>";
echo "NIM: " . $mhs->getNIM() . "<br>";
echo "Jurusan: " . $mhs->getJurusan() . "<br>";
echo "Kelas: " . $mhs->getKelas() . "<br>";
?>