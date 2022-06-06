<?php 
// Array Associative
// Array yang indexnya berupa string, yang ber-asosiasi dengan nilainya

$mahasiswa = [
    [
        "nama" => "Emilia Paradila S", 
        "npm" => "213040043", 
        "email" => "paradilasemilia@gmai.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" =>"Rahma Aliaputri Effendi", 
        "npm" => "213040047", 
        "email" =>"rahmaalia@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Lita Yusdia Fatimah", 
        "npm" => "213040059", 
        "email" => "litayusdia@gmail.com", 
        "jurusan" =>"Teknik Informatika"
    ],
    [
        "nama" => "Putri Aulia Maulidina",
         "npm" => "213040055", 
         "email" => "putriaulia@gmail.com", 
         "jurusan" =>"Teknik Informatika"
    ], 
];

// var_dump($mahasiswa[3]["nilai _tugas"]["tugas2"]);
?>

<?php foreach($mahasiswa as $mhs)  { ?>
<ul>
        <li>Nama: <?php echo $mhs["nama"]; ?></li>
        <li>NPM: <?php echo $mhs["npm"] ?></li>
        <li>Email: <?php echo $mhs["email"] ?></li>
        <li>Jurusan: <?php echo $mhs["jurusan"] ?></li>
</ul>
<?php } ?>

