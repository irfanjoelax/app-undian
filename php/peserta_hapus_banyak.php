<?php

// require file koneksi
require('koneksi.php');

// tangkap inputan
$no  = $_POST['no'];

// proses query delete
$query2  = "DELETE FROM peserta WHERE no_psrt IN(" . implode(',', $no) . ")";
mysqli_query($conn, $query2) or die(mysqli_error($conn));

// redirect
header('Location: ' . $path . '/?view=peserta');
exit;
