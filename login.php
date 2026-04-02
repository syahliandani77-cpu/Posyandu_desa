<?php

include "koneksi/database.php";
session_start();

if (isset($_SESSION["sudah_login"])) {
	header("location: dashboard.php");
}

$pesan_login = "";

	if(isset($_POST['login'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];
		$hash_password = hash("md5", $password);
	

		$sql = "SELECT * FROM petugas WHERE username = '$username' AND password = '$hash_password'";
		$result = $db->query ($sql);
			if ($result->num_rows > 0) {
				$data = $result->fetch_assoc();
				$_SESSION["username"] = $data["username"];
				$_SESSION["sudah_login"] = true ;
				header("location: dashboard.php");				
			}else{
				$pesan_login = "akun tidak ditemukan, silahkan coba lagi";
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
	<h3>MASUK AKUN</h3>
	<i><?= $pesan_login ?></i>
	<form action="login.php" method="POST">
		<input type="text" placeholder="username" name="username" />
		<input type="password" placeholder="password" name="password" />
		<button type="submit" name="login">Masuk Sekarang</button>
	</form>
	<?php include "Layout/footer.html" ?>
</body>
</html>