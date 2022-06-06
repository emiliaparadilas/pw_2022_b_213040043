<?php 

$mahasiswa = [
    ["Emilia Paradila S", "213040043", "paradilasemilia@gmai.com", "Teknik Informatika"],
    ["Rahma Aliaputri Effendi", "213040047", "rahmaalia@gmail.com", "Teknik Informatika"],
    ["Lita Yusdia Fatimah", "213040059", "litayusdia@gmail.com", "Teknik Informatika"],
    ["Putri Aulia Maulidina", "213040055", "putriaulia@gmail.com", "Teknik Informatika"], 
]
?>

<?php foreach($mahasiswa as $mhs)  { ?>
<ul>
        <li>Nama: <?php echo $mhs[0] ?></li>
        <li>NPM: <?php echo $mhs[1] ?></li>
        <li>Email: <?php echo $mhs[2] ?></li>
        <li>Jurusan: <?php echo $mhs[3] ?></li>
</ul>
<?php } ?>


