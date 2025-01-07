<?php
session_start();
include('koneksi.php');

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    
    // Update data di database
    $sql = "UPDATE admin SET nama = '$nama', email = '$email' WHERE id_admin = 1"; // Misalkan id_admin 1
    if ($conn->query($sql) === TRUE) {
        echo "Profil berhasil diperbarui!";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Mengambil data profil
$sql = "SELECT * FROM admin WHERE id_admin = 1"; // Misalkan id_admin 1
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<?php include('header.php'); ?>

<main>
    <h2>Profil Pengguna</h2>
    <form method="POST" action="profil.php">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?php echo $row['nama']; ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" required><br>

        <input type="submit" value="Update Profil">
    </form>
</main>

<?php include('footer.php'); ?>
