<?php
require_once ('kelas/akunBank.php');

$data1 = new akunBank("001", 10000);
$data1->setNama("Nasabah Pertama");

$data2 = new akunBank("002", 50000);
$data2->setNama("Nasabah Kedua");

echo "<h3>Data Akun 1</h3>";
echo "Nama: " . $data1->getNama() . "<br>";
echo "Nomor Akun: " . $data1->getAccountNumber() . "<br>";
echo "Saldo Awal: Rp " . $data1->tampilkanUang() . "<br>";
$data1->tambahUang(5000);
echo "Saldo setelah tambah: Rp " . $data1->tampilkanUang() . "<br>";
$data1->kurangiUang(2000);
echo "Saldo setelah kurang: Rp " . $data1->tampilkanUang() . "<br>";
echo "Pajak (11%): Rp " . $data1->hitungPajak() . "<br>";

echo "<h3>Data Akun 2</h3>";
echo "Nama: " . $data2->getNama() . "<br>";
echo "Nomor Akun: " . $data2->getAccountNumber() . "<br>";
echo "Saldo Awal: Rp " . $data2->tampilkanUang() . "<br>";
$data2->kurangiUang(60000); // menguji saldo tidak mencukupi
echo "Pajak (11%): Rp " . $data2->hitungPajak() . "<br>";
?>