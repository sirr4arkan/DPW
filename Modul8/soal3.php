<?php
// Soal 3: Data nilai akhir kelas menggunakan array

$siswa = array(
    array("no" => 1, "poin" => 75, "nama" => "Adi"),
    array("no" => 2, "poin" => 80, "nama" => "Joni"),
    array("no" => 3, "poin" => 65, "nama" => "Jihan"),
    array("no" => 4, "poin" => 70, "nama" => "Aya"),
    array("no" => 5, "poin" => 85, "nama" => "Ita"),
    array("no" => 6, "poin" => 90, "nama" => "Budi"),
    array("no" => 7, "poin" => 95, "nama" => "Tini"),
    array("no" => 8, "poin" => 65, "nama" => "Sari")
);

// a) Tampilkan poin siswa dengan nomor urut 5
echo "<h2>Soal 3: Data Nilai Akhir Kelas</h2>";
echo "<h3>a) Poin siswa nomor urut 5:</h3>";
echo "Nama: " . $siswa[4]['nama'] . ", Poin: " . $siswa[4]['poin'] . "<br>";

// b) Tampilkan semua nama siswa yang memiliki poin 90
echo "<h3>b) Siswa yang memiliki poin 90:</h3>";
$found = false;
foreach ($siswa as $s) {
    if ($s['poin'] == 90) {
        echo "Nama: " . $s['nama'] . ", Poin: " . $s['poin'] . "<br>";
        $found = true;
    }
}
if (!$found) {
    echo "Tidak ada siswa dengan poin 90<br>";
}

// c) Tampilkan semua nama siswa yang memiliki poin 100
echo "<h3>c) Siswa yang memiliki poin 100:</h3>";
$found = false;
foreach ($siswa as $s) {
    if ($s['poin'] == 100) {
        echo "Nama: " . $s['nama'] . ", Poin: " . $s['poin'] . "<br>";
        $found = true;
    }
}
if (!$found) {
    echo "Tidak ada siswa dengan poin 100<br>";
}
?>