<?php 
// SUPERGLOBALS
// Variabel bawaan PHP yang bisa di akses di mana pun
// Bentuknya Array Assosiative
// $_GET
// $_POST
// $_SERVER
// $_GET = ["nama" => "Emilia Paradila", "email" => "emiliapsupriatna@gmail.com"];
// $_GET["nama"] = "Emilia";
// $_GET["email"] = "emiliapsupriatna@gmail.com";
// var_dump($_GET);


?>

<!-- <h1>Halo, <?= $_GET["nama"]; ?></h1> -->

<ul>
    <li>
        <a href="kuliah_latihan2.php?nama=emilia&npm=213040043&email=emiliapsupriatna@gmail.com">Emilia</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=paradila&npm=213040059&email=paradila@gmail.com">paradila</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=supriatna&npm=213040060&email=supriatna@gmail.com">supriatna</a>
    </li>
</ul>

