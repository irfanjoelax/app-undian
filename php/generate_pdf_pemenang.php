<?php

// REQUIRE FILE KONEKSI
require('koneksi.php');

// REQUIRE FPDF
require_once '../vendor/autoload.php';

// SETTING & CONFIG
$mpdf = new \Mpdf\Mpdf();
$mpdf->AddPage("P", "", "", "", "", "15", "15", "15", "15", "", "", "", "", "", "", "", "", "", "", "", "A4");

// SELECT DATA DARI DATABASE
$query  = "SELECT * FROM peserta INNER JOIN hadiah ON peserta.hdh_id=hadiah.id_hdh ORDER BY id_psrt DESC";
$sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));

// SET KONTEN PDF DENGAN HTML
$konten = '<html><body><h1 align="center">Daftar Pemenang</h1><table border="1" width="100%"><tr align="center"><td width="15%"><h4>No. Peserta</h4></td><td width="35%"><h4>Nama Peserta</h4></td><td width="50%"><h4>Hadiah</h4></td></tr>';

while ($data = mysqli_fetch_array($sql)) {
  $konten .= '<tr align="center"><td width="15%">' . $data['no_psrt'] . '</td><td width="35%">' . $data['nm_psrt'] . '</td><td width="50%">' . $data['nama_hdh'] . '</td></tr>';
}

$konten .= '</table></body></html>';

$mpdf->WriteHTML($konten);
$mpdf->Output('daftar_pemenang.pdf', 'D');
