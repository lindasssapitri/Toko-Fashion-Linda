<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    // Proses data pengiriman...
    echo "Data berhasil dikirim!";
}
?>
