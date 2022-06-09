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
            <!-- <div class="mb-3">
                            <label for="merek" class="form-label">Bentuk</label>
                            <select class="form-select" name="merek" required="" id="merek">
                                <option disabled="" selected="">Pilih Bentuk</option>
                                <option value="1">Infus</option>
                                <option value="2">Tablet</option>
                                <option value="3">Kapsul</option>
                                <option value="4">Salep</option>
                                <option value="5">Obat cair</option>
                                <option value="6">Permen</option>
                                <option value="7">Suntik</option>
                                <option value="8">Gel</option>
                                <option value="9">Krim</option>
                                <option value="10">Sirop</option>
                                <option value="11">Serbuk</option> -->

                            </select>
                        </div>
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