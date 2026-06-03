<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db   = "akademik"; // Ganti dengan nama database SIA kamu

    protected $koneksi;

    public function __construct() {
        $this->koneksi = new mysqli($this->host, $this->user, $this->pass, $this->db);
        
        if ($this->koneksi->connect_error) {
            die("Koneksi gagal: " . $this->koneksi->connect_error);
        }
    }
}

class Akademik extends Database {
    
    // Fungsi untuk menghitung jumlah data (untuk dashboard)
    public function getCount($table) {
        $query = "SELECT COUNT(*) as total FROM $table";
        $result = $this->koneksi->query($query);
        $row = $result->fetch_assoc();
        return $row['total'];
    }

    // Fungsi untuk mengambil data tabel beserta fitur pencarian
    public function getTableData($table, $searchColumn, $keyword, $orderBy) {
        $whereClause = "";
        
        if (!empty($keyword)) {
            // Mencegah SQL Injection
            $keyword = $this->koneksi->real_escape_string($keyword);
            $whereClause = " WHERE $searchColumn LIKE '%$keyword%'";
        }
        
        $query = "SELECT * FROM $table" . $whereClause . " ORDER BY $orderBy ASC";
        return $this->koneksi->query($query);
    }
}

// Inisialisasi objek agar bisa langsung dipakai di file lain
$akademik = new Akademik();
?>