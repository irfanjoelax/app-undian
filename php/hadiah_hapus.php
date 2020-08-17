<?php

// require file koneksi
require('koneksi.php');

// proses query delete
$query2  = "DELETE FROM hadiah WHERE id_hdh = '$_GET[id]'";
mysqli_query($conn, $query2) or die(mysqli_error($conn));

// redirect
header('Location: ' . $path . '/?view=hadiah');
exit;
