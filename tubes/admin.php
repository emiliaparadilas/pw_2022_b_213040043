<?php 
session_start();

if( isset($_SESSION["login"]) ) {
    header("location: login.php");
    exit;
}
require 'functions.php';
$obats = query("SELECT * FROM obat");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    $obats = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>

<a href="logout.php">Logout</a>
    
<h1>Daftar Obat</h1>

<a href="tambah.php">tambah data obat</a>
<br></br>

<form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="tombol-cari">Cari!</button>

</form>

<br>
<div id="container">

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>kode_obat</th>
        <th>nama_obat</th>
        <th>harga</th>
        <th>bentuk</th>
        <th>stok</th>
        <th>manfaat</th>
        <th>konsumen</th>
        <th>gambar</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach($obats as $obat) :?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $obat["nama_obat"]; ?></td>
        <td><?= $obat["harga"]; ?></td>
        <td><?= $obat["bentuk"]; ?></td>
        <td><?= $obat["stok"]; ?></td>
        <td><?= $obat["manfaat"]; ?></td>
        <td><?= $obat["konsumen"]; ?></td>
        <td><img src="img/<?= $obat["gambar"]; ?>" width="100"></td>
        <td>
            <a href="ubah.php?kode_obat=<?= $obat["kode_obat"]; ?>">ubah</a> |
            <a href="hapus.php?id=<?= $obat["kode_obat"]; ?>" onclick="return confirm('serius?')">hapus</a>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>
</div>



</body>
</html>