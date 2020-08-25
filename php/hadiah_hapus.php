<?php

// require file koneksi
require('koneksi.php');

// tangkap inputan untuk di dekpripsi
$id = b_decode($_GET['id']);

// proses query delete
$query  = "DELETE FROM hadiah WHERE id_hdh = '$id'";
mysqli_query($conn, $query) or die(mysqli_error($conn));

// redirect
header('Location: ' . $path . '/?view=hadiah');
exit;
