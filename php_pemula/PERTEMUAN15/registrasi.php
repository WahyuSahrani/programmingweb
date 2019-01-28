<?php 
require 'functions.php';

if (isset($_POST["register"])) {
	
	if (registrasi($_POST) > 0) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
			  </script>";
	} else {
		echo mysqli_error($conn);
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
</head>
<body>

	<h1>Halaman Registrasi</h1>

	<form action="" method="POST">
		
		<table>
			<tr>
				<td><label for="username">Username</label></td>
				<td>:</td>
				<td><input type="text" name="username" id="username"></td>
			</tr>
			<tr>
				<td><label for="password">Password</label></td>
				<td>:</td>
				<td><input type="password" name="password" id="password"></td>
			</tr>
			<tr>
				<td><label for="password2">Konfirmasi Password </label></td>
				<td>:</td>
				<td><input type="password" name="password2" id="password2"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><button type="submit" name="register">Register</button></td>
			</tr>

		</table> 

	</form>
</body>
</html>