<?php

// REQUIRE FILE KONEKSI
require('koneksi.php');

// REQUIRE PHPSPREADSHEET
require_once '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// SETTING & CONFIG
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('B1', 'No. Peserta');
$sheet->setCellValue('C1', 'Nama Peserta');
$sheet->setCellValue('D1', 'Hadiah');

// set baris kedua untuk data 
$i = 2;

// select data dari database
$query  = "SELECT * FROM peserta INNER JOIN hadiah ON peserta.hdh_id=hadiah.id_hdh ORDER BY id_psrt DESC";
$sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));

// insert data kedalam excel dengan perulangan
while ($data = mysqli_fetch_array($sql)) {
  $sheet->setCellValue('B' . $i, $data['no_psrt']);
  $sheet->setCellValue('C' . $i, $data['nm_psrt']);
  $sheet->setCellValue('D' . $i, $data['nama_hdh']);
  $i++;
}

// OUTPUT
$writer = new Xlsx($spreadsheet);

$filename = 'daftar_pemenang';
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename=' . $filename . '.xlsx');
header('Cache-Control: max-age=0');

$proses = $writer->save('php://output');

if ($proses) {
  // REDIRECT
  header('Location: ' . $path . '/?view=pemenang');
  exit;
}
