<?php 
//koneksi ke database
$con = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data dari tabel mahasiswa / query
$result = mysqli_query($con, "SELECT * FROM mahasiswa");

//ambil data (fetch) mahasiswa dari object result
//mysqli_fetch_row() // mengembalikan array numerik
//mysqli_fetch_assoc() // mengembalikan array assosiatif
//mysqli_fetch_array() // mengambalikan keduanya
//mysqli_fetch_object()

// while( $mhs = mysqli_fetch_assoc($result)){
// 	var_dump($mhs);
// }
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
	<?php while( $row = mysqli_fetch_assoc($result)): ?>
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
<?php endwhile; ?>
</table>

</body>
</html>