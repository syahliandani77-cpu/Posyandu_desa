<?php
include 'config.php';

echo "<h2>Laporan Pendaftaran Balita</h2>";
$result = mysqli_query($conn, "SELECT * FROM balita");
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['nama']." - ".$row['tgl_lahir']." - ".$row['orang_tua']."<br>";
}

echo "<h2>Laporan Pemeriksaan</h2>";
$result = mysqli_query($conn, "SELECT * FROM pemeriksaan");
while ($row = mysqli_fetch_assoc($result)) {
    echo "ID Balita: ".$row['id_balita']." - Berat: ".$row['berat']." - Tinggi: ".$row['tinggi']." - Status: ".$row['status_gizi']."<br>";
}

echo "<h2>Laporan Imunisasi</h2>";
$result = mysqli_query($conn, "SELECT * FROM imunisasi");
while ($row = mysqli_fetch_assoc($result)) {
    echo "ID Balita: ".$row['id_balita']." - Jenis: ".$row['jenis_imunisasi']." - Tanggal: ".$row['tanggal']." - Petugas: ".$row['petugas']."<br>";
}
?>