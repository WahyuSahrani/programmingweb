<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

 ?>

<!DOCTYPE html>
<html>		
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Gambar</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
		<th>Aksi</th>
	</tr>	

	<?php $i = 1;  ?>
	<?php foreach ($mahasiswa as $row) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td><img src="img/<?= $row["gambar"]; ?>" width="50px"></td>
		<td><?= $row["nim"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["email"] ?></td>
		<td><?= $row["jurusan"] ?></td>
		<td>
			<a href="">Ubah</a> |
			<a href="">Hapus</a>
		</td>		
	</tr>
	<?php $i++; ?>
<?php endforeach; ?>
</table>

</body>
</html>