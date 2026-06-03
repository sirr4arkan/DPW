<?php
$con = new mysqli("localhost", "root", "root", "akademik");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// eksekusi DML INSERT menggunakan OOP
$sql = "INSERT INTO t_dosen (idDosen, namaDosen, noHP) VALUES (10, 'Rahmat Dwi Prasetya', '081122334455')";
$hasil = $con->query($sql);

if ($hasil === TRUE) {
    echo "Data dosen berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>