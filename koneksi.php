<?php
$host = "localhost";
$username = "root"; // username default untuk XAMPP
$password = ""; // password default untuk XAMPP
$dbname = "toko_fashion_linda"; // nama database

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
