<?php
include('koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM produk WHERE id_produk = $id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Produk berhasil dihapus!";
        header('Location: data_fashion.php');
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
