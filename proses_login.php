<?php
session_start();

// Konfigurasi database
$host = 'localhost';
$user = 'root';
$password = ''; // Ganti sesuai dengan password database Anda
$database = 'fashion_linda'; // Ganti dengan nama database Anda

// Koneksi ke database
$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk memeriksa login
$sql = "SELECT * FROM tb_login WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Login berhasil
    $user = $result->fetch_assoc();
    $_SESSION['username'] = $user['username'];
    header('Location: dashboard.php');
    exit();
} else {
    // Login gagal
    $_SESSION['error'] = 'Username atau password salah';
    header('Location: login.php');
    exit();
}

$stmt->close();
$conn->close();
?>
