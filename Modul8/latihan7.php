<?php
// PHP array
// index array
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";

// associative array
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br>";

// multidimensional array
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";
?>

<?php
echo "<br><h3>Array Buah</h3>";
$namaBuah = array("Nanas", "Mangga", "jeruk", "Apel", "Melon", "Manggis");
echo "saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ".";
echo "<br>";

// tampilkan Mangga
echo "saya suka " . $namaBuah[1];
echo "<br>";
// tampilkan Jeruk
echo "saya suka " . $namaBuah[2];
echo "<br>";
// tampilkan Apel
echo "saya suka " . $namaBuah[3];
echo "<br>";
// tampilkan Melon
echo "saya suka " . $namaBuah[4];
echo "<br>";

// array dengan spesifik index
$umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"43 Tahun");
$umur['Ahmad'] = "50 Tahun";
echo "Umur Andi adalah " . $umur['Andi'];
echo "<br>";

// tampilkan semua umur
foreach ($umur as $nama => $usia) {
    echo "Umur $nama adalah $usia<br>";
}
?>