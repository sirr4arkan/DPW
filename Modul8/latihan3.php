<?php
$x = 5;
$y = 10;

// Arithmetic operators
echo "Penambahan " . ($x + $y) . "<br>";
echo "Pengurangan " . ($x - $y) . "<br>";
echo "Perkalian " . ($x * $y) . "<br>";
echo "Pembagian " . ($x / $y) . "<br>";
echo "Modulus " . ($x % $y) . "<br>";
echo "Exponensial " . ($x ** $y) . "<br>";
echo("<br>");

// Assignment operators
$x += 2; // $x = $x + 2
$y *= 2; // $y = $y * 2
echo "Penambahan x " . $x . "<br>";
echo "Perkalian y " . $y . "<br>";
echo("<br>");

// Increment/Decrement operators
echo "Isi ++x = " . ++$x . "<br>";
echo "Isi x++ = " . $x++ . "<br>";
echo "Isi x = " . $x . "<br>";
echo("<br>");
echo "Isi --y = " . --$y . "<br>";
echo "Isi y-- = " . $y-- . "<br>";
echo "Isi y = " . $y . "<br>";
echo("<br>");

// Comparison operators
$x = 100;
$y = "100";
var_dump($x == $y); echo "<br>";
var_dump($x === $y); echo "<br>";
var_dump($x != $y); echo "<br>";
var_dump($x !== $y); echo "<br>";

$x = 100; $y = 50;
var_dump($x > $y); echo "<br>";
var_dump($x < $y); echo "<br>";
var_dump($x >= $y); echo "<br>";
var_dump($x <= $y); echo "<br>";

// Logical operators
$x = 100; $y = 50;
if ($x == 100 and $y == 50) { echo "Hello world!<br>"; }
if ($x == 100 or $y == 80) { echo "Hello world!<br>"; }
if ($x == 100 xor $y == 80) { echo "Hello world!<br>"; }
if ($x == 100 && $y == 50) { echo "Hello world!<br>"; }
if ($x == 100 || $y == 80) { echo "Hello world!<br>"; }
if (!($x == 90)) { echo "Hello world!<br>"; }

// Conditional assignment operators
$user = "Andi darmawan";
// <kondisi> ? <nilai_jika_kondisi_true> : <nilai_jika_kondisi_false>
$status = (empty($user)) ? "Kosong" : "Ada isi";
echo $status . "<br>";
// variable $color diisi dengan "red" jika $color tidak ada atau null
echo $color = $color ?? "red";
?>