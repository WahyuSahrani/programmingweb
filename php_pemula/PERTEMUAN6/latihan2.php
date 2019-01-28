<?php 
// $mahasiswa = [
// 	["Wahyu Sahrani", "175610008", "Sistem Informasi", "wahyusahrani@gmail.com"],
// 	["Wahyu Sahrani, S.Kom", "175610008", "Sistem Informasi", "wahyusahrani@gmail.com"]
// ]; 


// Array assosiative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
	[
	"nama" => "Wahyu Sahrani", 
	"nim" => "175610008",
	"email" => "wahyusahrani@gmail.com",
	"jurusan" => "Sistem Informasi"
	],
	[
	"nama" => "Wahyu Sahrani, S.Kom", 
	"nim" => "175610008",
	"email" => "wahyusahrani@gmail.com",
	"jurusan" => "Information System",

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

	<?php foreach ($mahasiswa as $mhs) : ?>
		<ul>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NIM : <?= $mhs["nim"]; ?></li>
			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
			<li>Email : <?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>
</body>
</html>