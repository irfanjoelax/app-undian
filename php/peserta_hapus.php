<?php

// require file koneksi
require('koneksi.php');

// proses query delete
$query2  = "DELETE FROM peserta WHERE no_psrt = '$_GET[no]'";
mysqli_query($conn, $query2) or die(mysqli_error($conn));

// redirect
header('Location: ' . $path . '/?view=peserta');
exit;
