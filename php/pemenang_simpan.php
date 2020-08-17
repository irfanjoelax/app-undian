<?php
// require file koneksi
require('koneksi.php');

// tangkap inputan no = nomer peserta & id = id hadiah
$no = $_POST['no'];
$id = $_POST['id'];

// proses query update status peserta 
$query  = "UPDATE peserta SET stts_psrt = 1, hdh_id = '$id' WHERE no_psrt = '$no'";
mysqli_query($conn, $query) or die(mysqli_error($conn));

// proses query update jumlah hadiah
$query2  = "UPDATE hadiah SET jmlh_hdh = jmlh_hdh - 1 WHERE id_hdh = '$id'";
mysqli_query($conn, $query2) or die(mysqli_error($conn));
