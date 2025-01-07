<?php
// Sidebar Toko
$kategori_produk = [
    'Pakaian Pria',
    'Pakaian Wanita',
    'Pakaian Anak',
    'Aksesoris',
    'Diskon'
];

$link_tambahan = [
    'Tentang Kami' => 'tentang_kami.php',
    'Kontak' => 'kontak.php',
    'Kebijakan Privasi' => 'kebijakan_privasi.php'
];
?>

<div class="sidebar">
    <h2>Kategori</h2>
    <ul>
        <?php foreach ($kategori_produk as $kategori): ?>
            <li><a href="kategori.php?kategori=<?php echo urlencode($kategori); ?>"><?php echo $kategori; ?></a></li>
        <?php endforeach; ?>
    </ul>

    <h2>Informasi</h2>
    <ul>
        <?php foreach ($link_tambahan as $judul => $url): ?>
            <li><a href="<?php echo $url; ?>"><?php echo $judul; ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>

<style>
.sidebar {
    background-color: #f4f4f4;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
.sidebar h2 {
    font-size: 1.2em;
    margin-bottom: 10px;
    color: #333;
}
.sidebar ul {
    list-style: none;
    padding: 0;
}
.sidebar ul li {
    margin: 8px 0;
}
.sidebar ul li a {
    color: #007BFF;
    text-decoration: none;
}
.sidebar ul li a:hover {
    text-decoration: underline;
}
</style>
