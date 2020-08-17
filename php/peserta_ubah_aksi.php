<?php

// require file koneksi
require('koneksi.php');

// tangkap inputan
$id         = $_GET['id'];
$no         = $_POST['nomer'];
$nama       = ucwords($_POST['nama']);

// proses query database
$query2  = "UPDATE peserta SET no_psrt = '$no', nm_psrt = '$nama' WHERE id_psrt = '$id'";
mysqli_query($conn, $query2) or die(mysqli_error($conn));

// redirect
header('Location: ' . $path . '/?view=peserta');
exit;
