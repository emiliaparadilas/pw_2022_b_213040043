<?php
 // koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pw_tubes_213040043"); 


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;

    $nama_obat = htmlspecialchars($data["nama_obat"]);
    $harga = htmlspecialchars($data["harga"]);
    $bentuk = htmlspecialchars($data["bentuk"]);
    $stok = htmlspecialchars($data["stok"]);
    $manfaat = htmlspecialchars($data["manfaat"]);
    $konsumen = htmlspecialchars($data["konsumen"]);
    

   // upload gambar
   $gambar = upload();
   if( !$gambar) {
       return false;
   }

    // query insert data 
    $query = "INSERT INTO obat
                VALUES 
              ('', '$nama_obat', '$harga', '$bentuk', '$stok', '$manfaat', '$konsumen', '$gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function upload() {
    
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if( $error === 4 ) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
              </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower (end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid )) {
         echo "<script>
                alert('yang anda upload bukan gambar!');
              </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if( $ukuranFile >1000000 ) {
         echo "<script>
                alert('ukuran gambar terlalu besar!');
              </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;


    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;

}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM obat WHERE kode_obat = $id") or die(mysqli_error($conn));      
return mysqli_affected_rows($conn);
}


function ubah($data) {
    global $conn;
    
    $kode_obat = $data["kode_obat"];
    $nama_obat = htmlspecialchars($data["nama_obat"]);
    $harga = htmlspecialchars($data["harga"]);
    $bentuk = htmlspecialchars($data["bentuk"]);
    $stok = htmlspecialchars($data["stok"]);
    $manfaat = htmlspecialchars($data["manfaat"]);
    $konsumen = htmlspecialchars($data["konsumen"]);
    // $gambar = htmlspecialchars($data["gambar"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if($_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    } else{ 
        // upload gambar
        $gambar = upload();
        if(!$gambar) {
            return false;
        }
    }

    

    $query = "UPDATE obat SET
                nama_obat = '$nama_obat',
                harga = '$harga',
                bentuk = '$bentuk',
                stok = '$stok',
                manfaat = '$manfaat',
                konsumen = '$konsumen',
                gambar = '$gambar'
            WHERE kode_obat = $kode_obat;";
  
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}  




function cari($keyword) {
    $query = "SELECT * FROM obat 
                WHERE
               nama_obat LIKE '%$keyword%' OR
               harga LIKE '%$keyword%' OR
               bentuk LIKE '%$keyword%' OR
               stok LIKE '%$keyword%' OR
               manfaat LIKE '%$keyword%' OR
               konsumen LIKE '%$keyword%' OR
               gambar LIKE '%$keyword%'
            ";
    return query($query);
}


function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if( mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar!')
                </script>";
            return false;
    }


    // cek konfirmasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai');
                </script>";
            return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);

}





?>

