<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_balita = $_POST['id_balita'];
    $berat = $_POST['berat'];
    $tinggi = $_POST['tinggi'];
    $status = $_POST['status'];

    $sql = "INSERT INTO pemeriksaan (id_balita, berat, tinggi, status_gizi) 
            VALUES ('$id_balita','$berat','$tinggi','$status')";
    mysqli_query($conn, $sql);
    echo "Data pemeriksaan berhasil disimpan!";
}
?>

<form method="post">
  ID Balita: <input type="text" name="id_balita"><br>
  Berat Badan: <input type="text" name="berat"><br>
  Tinggi Badan: <input type="text" name="tinggi"><br>
  Status Gizi: <input type="text" name="status"><br>
  <button type="submit">Simpan</button>
</form>