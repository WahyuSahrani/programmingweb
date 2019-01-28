<?php 
require 'functions.php';


//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){
 
	//cek apakah  data berhasil ditambahkan atau tidak
	if(tambah($_POST) > 0 ){
		echo "
			<script>
				alert('data berhasil ditambahkan:');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan:');
				document.location.href = 'index.php';
			</script>
		";
	}

}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah data mahasiswa</title>
</head>
<body>
	<h1>Tambah data mahasiswa</h1>

	<form action="" method="POST">
		
		<ul>
			<li>
				<label for="nim">NIM :</label>
				<input type="text" name="nim" id="nim" required>
			</li>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email">
			</li>
				<li>
				<label for="jurusan">jurusan :</label>
				<input type="text" name="jurusan" id="jurusan">
			</li>
				<li>
				<label for="gambar">Gambar :</label>
				<input type="text" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data</button>
			</li>
		</ul>
	</form>
</body>
</html>