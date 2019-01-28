<?php 
session_start();

if(!isset($_SESSION["login"])){
	header("location: login.php");
	exit;
}
require 'functions.php';

//pagination
//konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahData    = count(query("SELECT * FROM mahasiswa")) ;
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif  = (isset($_GET["halaman"]) ) ? $_GET["halaman"]: 1;
//halaman = 2, awalData = 2
//halaman = 3, awalData = 3
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

// tombol cari di klik
if(isset($_POST["cari"])){
	$mahasiswa = cari($_POST["keyword"]);
}

 ?>

<!DOCTYPE html>
<html>		
<head>
	<title>Halaman Admin</title>
</head>
<body>
<a href="logout.php">Logout</a>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<form action="" method="POST">	
	<input type="text" name="keyword" autofocus size="40" placeholder="Masukan keyword pencarian" autocomplete="" ="off">
	<button type="submit" name="cari" >Cari</button>
	<br><br>
</form>

<!-- navigasi -->

<?php if($halamanAktif > 1):  ?>
	<a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
<?php endif; ?>

<?php for($i = 1; $i <= $jumlahHalaman; $i++): ?>
	<?php if($i == $halamanAktif): ?>
		<a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
	<?php else: ?>
	<a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
<?php endif; ?>
<?php endfor; ?>

<?php if($halamanAktif < $jumlahHalaman):  ?>
	<a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
<?php endif; ?>

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
			<a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
			<a href="hapus.php?id=<?= $row["id"]; ?>"onclick="return confirm('yakin?');">Hapus</a>
		</td>		
	</tr>
	<?php $i++; ?>
<?php endforeach; ?>
</table>

</body>
</html>