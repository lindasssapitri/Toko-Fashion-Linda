<?php include('header.php'); ?>

<main>
    <h2>Kontak Kami</h2>
    <form action="kirim.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="pesan">Pesan:</label>
        <textarea name="pesan" id="pesan" rows="4" required></textarea><br>

        <input type="submit" value="Kirim Pesan">
    </form>
</main>

<?php include('footer.php'); ?>
