<?php

// require file koneksi
require('koneksi.php');

// tangkap inputan
$no     = $_POST['nomer'];
$nama   = ucwords($_POST['nama']);

// proses query database
$query  = "INSERT INTO peserta SET no_psrt = '$no', nm_psrt = '$nama', stts_psrt = 0";
mysqli_query($conn, $query) or die(mysqli_error($conn));

// redirect
header('Location: ' . $path . '/?view=peserta');
exit;
