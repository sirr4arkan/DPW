<?php
// data kelas dengan array 2 dimensi
$array = array(
    "1C" => array("udin", "ismail", "adi"),
    "1D" => array("lukman", "fajri", "mahmud")
);

// menampilkan data array
echo "<h3>Semua data array:</h3>";
print_r($array);
echo "<br><br>";

// menampilkan kelas 1C
echo "<h3>Kelas 1C:</h3>";
print_r($array['1C']);
echo "<br><br>";

// menampilkan kelas 1D dengan index 0
echo "Kelas 1D index 0: " . $array['1D'][0];
echo "<br>";

// tampilkan fajri
echo "Fajri: " . $array['1D'][1];
echo "<br>";

// tampilkan adi
echo "Adi: " . $array['1C'][2];
echo "<br>";

// data kelas bisa ditulis juga dengan
$array_simple = [
    "1C" => ["udin", "ismail", "adi"],
    "1D" => ["lukman", "fajri", "mahmud"]
];
?>