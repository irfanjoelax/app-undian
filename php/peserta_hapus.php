<?php

// require file koneksi
require('koneksi.php');

// proses query select
$query  = "SELECT * FROM peserta WHERE no_psrt = '$_GET[no]'";
$sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
$psrt   = mysqli_fetch_array($sql);

if ($psrt['foto_psrt'] != 'default.png') {
  unlink('../img/peserta/' . $psrt['foto_psrt']);
}

// proses query delete
$query2  = "DELETE FROM peserta WHERE no_psrt = '$_GET[no]'";
mysqli_query($conn, $query2) or die(mysqli_error($conn));

// redirect
header('Location: ' . $path . '/?view=peserta');
exit;
