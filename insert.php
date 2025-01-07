<?php
include('koneksi.php');
include('header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $sql = "INSERT INTO produk (nama_produk, harga, stok) VALUES ('$nama_produk', '$harga', '$stok')";

    if ($conn->query($sql) === TRUE) {
        echo "Produk berhasil ditambahkan!";
        header('Location: data_fashion.php');
    } else {
        echo "Error: " . $conn->error;
    }
}

?>

<main>
    <h2>Tambah Produk</h2>
    <form method="POST" action="insert.php">
        <label for="nama_produk">Nama Produk:</label>
        <input type="text" name="nama_produk" id="nama_produk" required><br>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" required><br>

        <label for="stok">Stok:</label>
        <input type="number" name="stok" id="stok" required><br>

        <input type="submit" value="Tambah Produk">
    </form>
</main>

<?php include('footer.php'); ?>
