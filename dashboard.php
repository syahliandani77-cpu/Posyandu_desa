<?php

session_start();

if (isset($_POST['keluar'])) {
	session_unset();
	session_destroy();
	header('location: index.php');
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
	<h1>Selamat Datang <?= $_SESSION["username"] ?></h1>
	<form action="dashboard.php" method="POST">
		<button type="submit" name="keluar">Logout</button>		
	</form>
<?php include "Layout/footer.html" ?>
</body>
</html>