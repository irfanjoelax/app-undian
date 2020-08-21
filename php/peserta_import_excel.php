<?php

// REQUIRE FILE KONEKSI
require('koneksi.php');

// REQUIRE PHPSPREADSHEET
require_once '../vendor/autoload.php';

// INIT VARIABEL FILE
$fileName  = $_FILES['excel']['name'];
$fileTemp  = $_FILES['excel']['tmp_name'];

// SET & CONFIG 
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($fileTemp);
$spreadSheet = $reader->load($fileTemp);
$worksheet = $spreadSheet->getActiveSheet();
$rows = $worksheet->toArray();

// HAPUS BARIS PERTAMA
unset($rows[0]);

// LOOP UNTUK INSERT DATABASE
foreach ($rows as $key => $value) {
  $nm_psrt = ucwords($value[1]);

  $query  = "INSERT INTO peserta SET no_psrt = '$value[0]', nm_psrt = '$nm_psrt', stts_psrt = 0, hdh_id = 0";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
}

// REDIRECT
header('Location: ' . $path . '/?view=peserta');
exit;
