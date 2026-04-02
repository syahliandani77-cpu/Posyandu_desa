<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_balita = $_POST['id_balita'];
    $jenis = $_POST['jenis'];
    $tgl = $_POST['tgl'];
    $petugas = $_POST['petugas'];

    $sql = "INSERT INTO imunisasi (id_balita, jenis_imunisasi, tanggal, petugas) 
            VALUES ('$id_balita','$jenis','$tgl','$petugas')";
    mysqli_query($conn, $sql);
    echo "Data imunisasi berhasil disimpan!";
}
?>

<form method="post">
  ID Balita: <input type="text" name="id_balita"><br>
  Jenis Imunisasi: <input type="text" name="jenis"><br>
  Tanggal: <input type="date" name="tgl"><br>
  Petugas: <input type="text" name="petugas"><br>
  <button type="submit">Simpan</button>
</form>