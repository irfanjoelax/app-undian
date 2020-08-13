<?php

// require file koneksi
require('koneksi.php');

// proses query database
$query  = "SELECT * FROM peserta WHERE status_psrt = 0 ORDER BY rand(), id_psrt ASC LIMIT 1";
$sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
$data   = array();

while ($list = mysqli_fetch_array($sql)) {
  $row = array();

  $row['id']      = $list['id_psrt'];
  $row['no']      = $list['no_psrt'];
  $row['nm']      = $list['nm_psrt'];
  $row['foto']    = $list['foto_psrt'];
  $row['status']  = $list['status_psrt'];

  $data[] = $row;
};

// parsing JSON
echo json_encode($data);
