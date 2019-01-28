<?php 
session_start();

if(!isset($_SESSION["login"])){
	header("location: login.php");
	exit;
}
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari di klik
if(isset($_POST["cari"])){
	$mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html>		
<head>
	<title>Halaman Admin</title>

	<style type="text/css">
		@media print {
			.logout, .tambah, .form-cari, .aksi{
				display: none;
			}
		}
	</style>
</head>
<body> 
<a href="logout.php" class="logout">Logout</a>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php" class="tambah">Tambah data mahasiswa</a>
<br><br>

<form action="" method="POST" class="form-cari">
	
	<input type="text" name="keyword" autofocus size="40" placeholder="Masukan keyword pencarian" autocomplete ="off" id="keyword">
	 	
</form>

<br>
<div id="container">
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
		<td class="aksi">
			<a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
			<a href="hapus.php?id=<?= $row["id"]; ?>"onclick="return confirm('yakin?');">Hapus</a>
		</td>		
	</tr>
	<?php $i++; ?>
<?php endforeach; ?>

</table>
</div>

<script src="js/script.js"></script>
</body>
</html>