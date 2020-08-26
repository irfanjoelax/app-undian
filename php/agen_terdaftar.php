<?php

// require file koneksi
require('koneksi.php');


// PROSES CEK PRIORITAS
$query  = "SELECT * FROM agen WHERE prioritas_agen = 1";
$sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
$num    = mysqli_num_rows($sql);

if ($num > 0) {
  $query2  = "SELECT * FROM agen WHERE stts_agen = 0 AND prioritas_agen = 1 ORDER BY rand() LIMIT 1";
} else {
  $query2  = "SELECT * FROM agen WHERE stts_agen = 0 AND prioritas_agen = 0 ORDER BY rand() LIMIT 1";
}

// proses query database
$sql    = mysqli_query($conn, $query2) or die(mysqli_error($conn));
$data   = array();

while ($list = mysqli_fetch_array($sql)) {
  $row = array();

  $row['id']  = $list['id_agen'];
  $row['no']  = $list['no_agen'];
  $row['nm']  = $list['nm_agen'];
  $row['tlp'] = $list['tlp_agen'];

  $data[] = $row;
};

// parsing JSON
echo json_encode($data);
