<?php 
// Pertemuan 2, belajar sintaks PHP

// NILAI 
// angka (integer), tulisan (string), true/false (boolean)
echo 10; // integer
echo '<br>';
echo 'Emiliaparadila'; //string
echo '<br>';
echo false; // boolean null
echo '<hr>';

// VARIABEL 
// Tempat menampung NILAI
// awali dengan tanda $, nama nya bebas 
// boleh mengandung angka, tidak boleh diawali angka
// tidak boleh ada spasi 
$nama_depan  = 'Emiliaparadila';
echo $nama_depan;
echo '<hr>';

//STRING 
// '', ""
$hari = "jum'at";
echo $hari;
echo "<br>";
echo 'Emiliaparadila: "Hallo, Semua!"';
echo '<br>';
// Escafe Character
// \
echo 'Emiliapardila: "Selamat hari jum\at"';
echo '<br>';
echo 'Emiliaparadila: "Selamat hari';
echo '<br>';
// Interpolasi 
// Mencetak langsung isi variabel 
// hanya bisa oleh ""
echo "Halo, nama saya $nama_depan";
echo '<br>';
echo 'Halo, nama saya $nama_depan';
echo '<hr>';

// Concat / Penghubung String 
// . 
$nama_depan = 'Emilia';
$nama_belakang = 'Paradila';
echo $nama_depan . " " . $nama_belakang;
echo '<br>';
echo 'Emilia: "Selamat' ." hari Jum:at\"";
echo '<hr>';

// OPERATOR 
// Aritmatika 
// +, -, *, /
echo 1 + 1; // Hasil dari 1 + 1 adalah 2;
echo "<br>";
echo 'Hasil 1 + 1 adalah' . " " . 1+1;
echo '<br>';
echo (1 + 2) * 3 - 4; // KaBaTaku
echo '<br>';
echo 10 % 5;
echo '<br>';
echo 1 + "1" + 1;
echo '<hr>';

// Perbandingan 
// <, >, <=, >=, ==, !=
echo 1 < 5;
echo '<br>';
echo 1 == "1";
echo '<hr>';

// Identitas / Strict Comparison
// ===, !==
echo 1 === "1";
echo '<hr>';

// Increment / Decrement 
// tambah / kurang 1
// ++, --
$x = 10;
echo ++$x;
echo '<br>';
echo $x;
echo '<hr>';






?>
