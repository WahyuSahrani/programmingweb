<?php
session_start();

if (isset($_SESSION["login"])) {
	header("location: index.php");
	exit;
}

require 'functions.php';

if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	//cek username
	if (mysqli_num_rows($result) === 1) {
		
		//cek password
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["password"])){
			//set session
			$_SESSION["login"] = true;

			header("location: index.php");
			exit;
		}
	}

	$error = true;

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>

<h1>Halaman Login</h1>

<?php if(isset($error)): ?>
	<p style="font-style: italic; color: red;">username / password salah!</p>
<?php endif; ?>

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
			<td><button type="submit" name="login">Login</button></td>
		</tr>
	</table>

</form>

</body>
</html>