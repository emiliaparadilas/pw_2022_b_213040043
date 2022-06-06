<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("location: login.php");
    exit;
}

require 'functions.php';

// ambil data URL
$kode_obat = $_GET["id"];

// query data obat berdasarkan id
$obat = query ("SELECT * FROM obat WHERE kode_obat = $kode_obat")[0]; 



// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    
    // cek apakah data berhasil diubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah');
                document.location.href = 'admin.php';
            </script>
        ";
        
    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah data obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-md-6">
    <h1>Ubah data obat</h1>

    <form action="" method="post">
        <input type="hidden" name="kode_obat" value="<?= $obat["kode_obat"]; ?>">
        <ul>
            <div class="mb-3">
                <label for="nama_obat" class="form-label">NAMA_OBAT : </label>
                <input type="text" name="nama_obat" id="nama_obat" class="form-control" width="200" required value="<?= $obat["nama_obat"]; ?>">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">HARGA : </label>
                <input type="text" name="harga" id="harga" required value="<?= $obat["harga"]; ?>">
        </div>
            <div class="mb-3">
                <label for="bentuk" class="form-label">BENTUK : </label>
                <input type="text" name="bentuk" id="bentuk" required value="<?= $obat["bentuk"]; ?>">
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">STOK : </label>
                <input type="text" name="stok" id="stok" required value="<?= $obat["stok"]; ?>">
            </div>
            <div class="mb-3">
                <label for="manfaat" class="form-label">MANFAAT : </label>
                <input type="text" name="manfaat" id="manfaat" required value="<?= $obat["manfaat"]; ?>">
            </div>
            <div class="mb-3">
                <label for="konsumen" class="form-label">KONSUMEN : </label>
                <input type="text" name="konsumen" id="konsumen" required value="<?= $obat["konsumen"]; ?>">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">GAMBAR : </label>
                <input type="file" name="gambar" id="gambar" >
                <img src="img/<?= $obat['gambar']; ?>" width="150">
            </div>
            <div>
                <button type="submit" name="submit" class="btn btn-primary">Ubah Data!</button>
            </div>
        </ul>


    </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>