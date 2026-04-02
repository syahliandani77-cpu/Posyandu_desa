<?php

include "koneksi/database.php";
session_start();

if (isset($_SESSION["sudah_login"])) {
	header("location: dashboard.php");
}

$daftar_message = "";

if (isset($_POST['btn_submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$hash_password = hash("md5", $password);
	

	$sql = "INSERT INTO petugas(username, password) VALUES ('$username', '$hash_password')";

	try {

		if ($db->query($sql)) {
		$daftar_message = "daftar akun berhasil, silahkan login";
	}else{
		$daftar_message = "daftar akun gagal, silahkan coba kembali";
	}
		
	} catch (mysqli_sql_exception) {
		$daftar_message = "Username sudah digunakan, silahkan coba lagi";
	}
	$db->close();

}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php include "Layout/header.html" ?>
	<h3>DAFTAR AKUN</h3>
	<i><?= $daftar_message ?></i>
	<form action="register.php" method="POST">
		<input type="text" placeholder="username" name="username" />
		<input type="password" placeholder="password" name="password" />
		<button type="submit" name="btn_submit">Daftar Sekarang</button>
	</form>
	<?php include "Layout/footer.html" ?>
</body>
</html>