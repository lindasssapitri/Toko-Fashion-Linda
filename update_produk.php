<?php
include('koneksi.php');
include('header.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM produk WHERE id_produk = $id";
    $result = $conn->query($sql);
    $produk = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $sql = "UPDATE produk SET nama_produk = '$nama_produk', harga = '$harga', stok = '$stok' WHERE id_produk = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Produk berhasil diperbarui!";
        header('Location: data_fashion.php');
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<main>
    <h2>Update Produk</h2>
    <form method="POST" action="update_produk.php?id=<?php echo $produk['id_produk']; ?>">
        <label for="nama_produk">Nama Produk:</label>
        <input type="text" name="nama_produk" id="nama_produk" value="<?php echo $produk['nama_produk']; ?>" required><br>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" value="<?php echo $produk['harga']; ?>" required><br>

        <label for="stok">Stok:</label>
        <input type="number" name="stok" id="stok" value="<?php echo $produk['stok']; ?>" required><br>

        <input type="submit" value="Update Produk">
    </form>
</main>

<?php include('footer.php'); ?>
