<?php

// require file koneksi
require('koneksi.php');

// tangkap inputan
$no         = $_POST['nomer'];
$nama       = ucwords($_POST['nama']);
$foto_lama  = $_POST['foto_lama'];
$foto       = $_FILES['foto']['name'];
$temp       = $_FILES['foto']['tmp_name'];

// jika inputan foto kosong 
if (empty($foto)) {
  $gambar = $foto_lama;
}
// jika inputan foto tidak kosong
else {
  // proses query select
  $query  = "SELECT * FROM peserta WHERE no_psrt = '$no'";
  $sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $psrt   = mysqli_fetch_array($sql);
  unlink('../img/peserta/' . $psrt['foto_psrt']);
  move_uploaded_file($temp, '../img/peserta/' . $foto);
  $gambar = $foto;
}

// proses query database
$query2  = "UPDATE peserta SET no_psrt = '$no', nm_psrt = '$nama', foto_psrt = '$gambar', status_psrt = 0 WHERE no_psrt = '$no'";
mysqli_query($conn, $query2) or die(mysqli_error($conn));

// redirect
header('Location: ' . $path . '/?view=peserta-detail&no=' . $no);
exit;
