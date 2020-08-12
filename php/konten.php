<?php

// views data utama
if (isset($_GET['view'])) $view = $_GET['view'];
else $view = "beranda";

if ($view == "beranda") include("beranda.php");

// VIEW CRUD PESERTA
elseif ($view == "peserta") include("peserta.php");
elseif ($view == "peserta-tambah") include("peserta_tambah.php");
elseif ($view == "peserta-detail") include("peserta_detail.php");
elseif ($view == "peserta-ubah") include("peserta_ubah.php");
