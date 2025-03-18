<?php
// Membuat Array
$hari= array('Senin', 'Selasa', 'Rabu'); //Cara Lama
$bulan=['Januari', 'Februari', 'Maret']; //Caea Baru

$myArray= ['Alam', 20, true];

// Menampilkan Array
// Menampilkan Seluruh Isi
var_dump ($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// Gambarkan echo jika ingin mencetak 1 elemen (menggunakan index)
echo $hari [2];
echo "<br>";
echo $myArray[0];
echo "<br>";

//Mnambah isi array
//Gunakan []
$hari[] = 'Kamis';
$bulan[] = 'April';
print_r($hari);
echo "<br>";
print_r($bulan);