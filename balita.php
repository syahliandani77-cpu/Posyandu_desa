<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $ortu = $_POST['ortu'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO balita (nama, tgl_lahir, orang_tua, alamat) 
            VALUES ('$nama','$tgl_lahir','$ortu','$alamat')";
    mysqli_query($conn, $sql);
    echo "Data balita berhasil disimpan!";
}
?>

<form method="post">
  Nama: <input type="text" name="nama"><br>
  Tanggal Lahir: <input type="date" name="tgl_lahir"><br>
  Orang Tua: <input type="text" name="ortu"><br>
  Alamat: <input type="text" name="alamat"><br>
  <button type="submit">Simpan</button>
</form>