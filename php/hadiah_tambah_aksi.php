<?php

// require file koneksi
require('koneksi.php');

// tangkap inputan
$nama     = $_POST['nama'];
$jumlah   = $_POST['jumlah'];

// proses query database
$query  = "INSERT INTO hadiah SET nama_hdh = '$nama', jmlh_hdh = '$jumlah', psrt_id = 0";
mysqli_query($conn, $query) or die(mysqli_error($conn));

// redirect
header('Location: ' . $path . '/?view=hadiah');
exit;
