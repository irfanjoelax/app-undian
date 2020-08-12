<?php

// require file koneksi
require('koneksi.php');

// tangkap inputan
$no     = $_POST['nomer'];
$nama   = ucwords($_POST['nama']);
$foto   = $_FILES['foto']['name'];
$temp   = $_FILES['foto']['tmp_name'];

if (empty($foto)) {
  $gambar = 'default.png';
} else {
  move_uploaded_file($temp, '../img/peserta/' . $foto);
  $gambar = $foto;
}

// proses query database
$query  = "INSERT INTO peserta SET no_psrt = '$no', nm_psrt = '$nama', foto_psrt = '$gambar', status_psrt = 0";
mysqli_query($conn, $query) or die(mysqli_error($conn));

// redirect
header('Location: ' . $path . '/?view=peserta');
exit;
