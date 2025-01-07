<?php
// Header Toko
$toko_nama = "Toko Fashion Linda";
$toko_logo = "header-bg.jpeg"; // Nama file logo yang berada di folder yang sama
$menu_navigasi = [
    'Beranda' => 'index.php',
    'Pofil' => 'profil.php',
    'layanan' => 'layanan.php',
    'Kontak' => 'kontak.php'
];
?>

<div class="header">
    <div class="logo">
        <img src="<?php echo $toko_logo; ?>" alt="<?php echo $toko_nama; ?>" />
    </div>
    <h1><?php echo $toko_nama; ?></h1>
    <nav>
        <ul>
            <?php foreach ($menu_navigasi as $judul => $url): ?>
                <li><a href="<?php echo $url; ?>"><?php echo $judul; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
</div>

<style>
.header {
    background-color: #007BFF;
    color: #fff;
    padding: 20px;
    text-align: center;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
.header .logo img {
    max-height: 80px;
    margin-bottom: 10px;
}
.header h1 {
    font-size: 2em;
    margin: 10px 0;
}
.header nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
}
.header nav ul li {
    margin: 0 15px;
}
.header nav ul li a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
}
.header nav ul li a:hover {
    text-decoration: underline;
}
</style>
