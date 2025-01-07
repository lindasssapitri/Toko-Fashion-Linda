<?php
include('koneksi.php');
include('header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    // Upload gambar produk
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Cek apakah file adalah gambar
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
    }

    // Cek apakah file sudah ada
    if (file_exists($target_file)) {
        $uploadOk = 0;
    }

    // Cek ukuran file
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $uploadOk = 0;
    }

    // Cek jenis file
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $uploadOk = 0;
    }

    // Jika upload berhasil, masukkan data produk ke database
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO produk (nama_produk, harga, stok, gambar) VALUES ('$nama_produk', '$harga', '$stok', '$target_file')";
            if ($conn->query($sql) === TRUE) {
                echo "Produk berhasil ditambahkan!";
                header('Location: data_fashion.php');
            } else {
                echo "Error: " . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>

<main>
    <h2>Tambah Produk dengan Gambar</h2>
    <form action="upload_produk.php" method="POST" enctype="multipart/form-data">
        <label for="nama_produk">Nama Produk:</label>
        <input type="text" name="nama_produk" id="nama_produk" required><br>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" required><br>

        <label for="stok">Stok:</label>
        <input type="number" name="stok" id="stok" required><br>

        <label for="fileToUpload">Pilih gambar:</label>
        <input type="file" name="fileToUpload" id="fileToUpload" required><br>

        <input type="submit" value="Tambah Produk" name="submit">
    </form>
</main>

<?php include('footer.php'); ?>
