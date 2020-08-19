<?php

// REQUIRE FILE KONEKSI
require('koneksi.php');

// REQUIRE PHPSPREADSHEET
require_once '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// INIT VARIABEL 
// $spreadsheet = new Spreadsheet();
// $inputFileType = 'Xlsx';
$filePath   = __DIR__ . "\database\contoh_excel_import.xls";
// $filePath = $path . "/database/contoh_excel_import.xls";
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($filePath);
$spreadSheet = $reader->load($filePath);
print_r($spreadsheet);


// // SET & CONFIG 
// $worksheet = $spreadsheet->getActiveSheet();
// $rows = $worksheet->toArray();

// // hapus baris pertama
// unset($rows[0]);

// foreach ($rows as $key => $value) {
//   $query  = "INSERT INTO peserta SET no_psrt = '$value[0]', nm_psrt = '$value[1]', stts_psrt = 0, hdh_id = 0";
//   mysqli_query($conn, $query) or die(mysqli_error($conn));
// }

// // redirect
// header('Location: ' . $path . '/?view=peserta');
// exit;
