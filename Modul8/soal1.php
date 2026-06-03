<?php
// Soal cerita 1: Menghitung gaji bersih Obi

$gajiPokok = 3250000;
$tunjanganJabatan = 1200000;

// Gaji kotor = gaji pokok + tunjangan
$gajiKotor = $gajiPokok + $tunjanganJabatan;

// Pajak penghasilan 10% dari gaji kotor
$pajak = $gajiKotor * 0.10;

// Gaji bersih = gaji kotor - pajak
$gajiBersih = $gajiKotor - $pajak;

echo "<h2>Perhitungan Gaji Obi</h2>";
echo "Gaji Pokok: Rp. " . number_format($gajiPokok, 0, ',', '.') . "<br>";
echo "Tunjangan Jabatan: Rp. " . number_format($tunjanganJabatan, 0, ',', '.') . "<br>";
echo "Gaji Kotor: Rp. " . number_format($gajiKotor, 0, ',', '.') . "<br>";
echo "Pajak (10%): Rp. " . number_format($pajak, 0, ',', '.') . "<br>";
echo "<strong>Gaji Bersih: Rp. " . number_format($gajiBersih, 0, ',', '.') . "</strong><br>";
?>