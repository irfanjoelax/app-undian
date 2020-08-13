<?php

// require file koneksi
require('koneksi.php');

// tangkap inputan
$no = $_GET['no'];

// proses query database
$query2  = "UPDATE peserta SET status_psrt = 1 WHERE no_psrt = '$no'";
mysqli_query($conn, $query2) or die(mysqli_error($conn));

// redirect
header('Location: ' . $path);
exit;
