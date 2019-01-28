<?php 
//array -> variabel yang dapat memiliki banyak nilai
//elemen pada array boleh memiliki tipe data yang beda
//pasangan antara key dan value
//membuat array cara lama
$hari = array("Senin","Selasa","Rabu");

//Cara baru
$bulan = ["Januari", "Februari", "Maret", "April", "Mei"];

//cara menampilkan array
//var_dump() / print_r
var_dump($hari);
echo "<br>";
print_r($hari);

//menampilkan 1 elemen pada array
echo "<br>";
echo $hari[0];
echo "<br>";
echo $bulan[3];
echo "<br>";

//menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);
 ?>