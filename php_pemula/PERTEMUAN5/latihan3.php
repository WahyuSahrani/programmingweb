<?php 
$mahasiswa = [
["Wahyu Sahrani", "175610008", "Sistem Informasi", "wahyusahrani@gmail.com"],
["Wahyu Sahrani. S.Kom", "175610008", "Sistem Informasi", "wahyusahrani@gmail.com"],
["Wahyu Sahrani. S.Kom", "175610008", "Sistem Informasi", "wahyusahrani@gmail.com"]
]
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>

 	<!-- <ul>
 		<?php foreach ($mahasiswa as $mhs)  : ?>
 			<li><?= $mhs;  ?></li>
 		<?php endforeach; ?>
 	</ul> -->

 	<?php foreach ($mahasiswa as $mhs ) : ?>
 	<ul>
 		<li>Nama    :<?= $mhs[0]; ?></li>
 		<li>NIM     :<?= $mhs[1]; ?></li>
 		<li>Jurusan :<?= $mhs[2]; ?></li>
 		<li>Email   :<?= $mhs[3]; ?></li>
 	</ul>
 <?php endforeach; ?>

 </body>
 </html>