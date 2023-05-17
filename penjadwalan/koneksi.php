<?php
$host = "localhost"; // Nama host database
$username = "root"; // Username database
$password = ""; // Password database
$database = "penjadwalan_mk"; // Nama database

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

?>
