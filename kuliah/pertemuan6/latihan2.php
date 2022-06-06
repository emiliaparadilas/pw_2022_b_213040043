<?php 
// $mahasiswa = [
//      ["Emilia Paradila S", "213040043", "paradilasemilia@gmail.com", Teknik Informatika"],
//      ["Emilia Paradila S", "213040043", "paradilasemilia@gmail.com", Teknik Informatika"],
// ];

// array assosiative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
        <title>Daftar Mahasiswa</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>

        <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?=$mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
        <?php endforeach; ?>
    </body>
</html>



