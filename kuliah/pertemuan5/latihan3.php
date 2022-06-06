<?php 
$mahasiswa = [
    ["Emilia Paradila S", "213040043", "Teknik Informatika", "paradilasemilisa@gmail.com"],
    ["Rahma Aliaputri Effendi", "213040047", "Teknik Informatika", "rahmaalia@gmail.com"],
    ["213040059", "Lita Yusdia Fatimah", "Teknik Informatika", "litayusdia@gmail.com"],
];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>


</body>
</html>