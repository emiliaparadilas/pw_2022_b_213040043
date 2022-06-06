<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("location: login.php");
    exit;
}

require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil di tambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'admin.php';
            </script>
        ";
        
    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah data obat</title>
</head>
<body>
    <h1>Tambah data obat</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama_obat">NAMA_OBAT : </label>
                <input type="text" name="nama_obat" id="nama_obat">
            </li>
            <li>
                <label for="harga">HARGA : </label>
                <input type="text" name="harga" id="harga">
            </li>
            <li>
                <label for="bentuk">BENTUK : </label>
                <input type="text" name="bentuk" id="bentuk">
            </li>
            <li>
                <label for="stok">STOK : </label>
                <input type="text" name="stok" id="stok">
            </li>
            <li>
                <label for="manfaat">MANFAAT : </label>
                <input type="text" name="manfaat" id="manfaat">
            </li>
            <li>
                <label for="konsumen">KONSUMEN : </label>
                <input type="text" name="konsumen" id="konsumen">
            </li>
            <li>
                <label for="gambar">GAMBAR : </label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
            <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>


    </form>
</body>
</html>