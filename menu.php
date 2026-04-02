<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}
?>

<h2>Menu Utama Posyandu</h2>
<ul>
  <li><a href="balita.php">Pendaftaran Balita</a></li>
  <li><a href="pemeriksaan.php">Pemeriksaan Kesehatan</a></li>
  <li><a href="imunisasi.php">Imunisasi</a></li>
  <li><a href="laporan.php">Laporan</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>