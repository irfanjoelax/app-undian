<?php

// VIEW DATA UTAMA
if (isset($_GET['view'])) $view = $_GET['view'];
else $view = "beranda";

if ($view == "beranda") include("beranda.php");

// VIEW CRUD PESERTA
elseif ($view == "peserta") include("peserta.php");
elseif ($view == "peserta-tambah") include("peserta_tambah.php");
elseif ($view == "peserta-detail") include("peserta_detail.php");
elseif ($view == "peserta-ubah") include("peserta_ubah.php");
elseif ($view == "peserta-hapus") include("peserta_hapus.php");

// VIEW CRUD HADIAH
elseif ($view == "hadiah") include("hadiah.php");
elseif ($view == "hadiah-tambah") include("hadiah_tambah.php");
elseif ($view == "hadiah-detail") include("hadiah_detail.php");
elseif ($view == "hadiah-ubah") include("hadiah_ubah.php");
elseif ($view == "hadiah-hapus") include("hadiah_hapus.php");

// VIEW UNDIAN
elseif ($view == "undian") include("undian.php");
