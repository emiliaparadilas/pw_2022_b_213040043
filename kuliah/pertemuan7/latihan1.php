<?php 
// $_GET
$mahasiswa = [
    [
        "nama" => "Emilia Paradila S",
        "nrp" => "213040043",
        "email" => "paradilasemilia@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "emil.jpeg"
    ],
    [
        "nama" => "Emilia Paradila S",
        "nrp" => "213040043",
        "email" => "paradilasemilia@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "emilia.jpeg"
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs) :  ?>
    <li>
       <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>


 