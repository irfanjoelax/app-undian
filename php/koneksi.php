<?php

// setting format tanggal
date_default_timezone_set('Asia/Makassar');

// title aplikasi
$title   = "Aplikasi Undian";

// path aplikasi
$path    = "http://localhost/www/app-undian";

// setting variabel untuk connet sql
$host    = "localhost";
$user    = "root";
$pass    = "";
$db      = "db_undian";

// jalankan koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn == false) {
  echo "koneksi tidak berhasil";
}
