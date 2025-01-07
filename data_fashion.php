<?php
include('koneksi.php');
include('header.php');

$sql = "SELECT * FROM produk";
$result = $conn->query($sql);
?>

<main>
    <h2>Data Produk Fashion</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Action</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id_produk']; ?></td>
                <td><?php echo $row['nama_produk']; ?></td>
                <td><?php echo $row['harga']; ?></td>
                <td><?php echo $row['stok']; ?></td>
                <td><a href="delete_produk.php?id=<?php echo $row['id_produk']; ?>">Hapus</a></td>
            </tr>
        <?php } ?>
    </table>
</main>

<?php include('footer.php'); ?>
