<?php

// VIEW DATA UTAMA
if (isset($_GET['view'])) $view = $_GET['view'];
else $view = "beranda";

if ($view == "beranda") include("beranda.php");

// VIEW CRUD AGEN
elseif ($view == "agen") include("agen.php");
elseif ($view == "agen-tambah") include("agen_tambah.php");
elseif ($view == "agen-detail") include("agen_detail.php");
elseif ($view == "agen-ubah") include("agen_ubah.php");
elseif ($view == "agen-hapus") include("agen_hapus.php");
elseif ($view == "agen-import") include("agen_import.php");

// VIEW CRUD HADIAH
elseif ($view == "hadiah") include("hadiah.php");
elseif ($view == "hadiah-tambah") include("hadiah_tambah.php");
elseif ($view == "hadiah-detail") include("hadiah_detail.php");
elseif ($view == "hadiah-ubah") include("hadiah_ubah.php");
elseif ($view == "hadiah-hapus") include("hadiah_hapus.php");
elseif ($view == "hadiah-import") include("hadiah_import.php");

// VIEW PEMENANG
elseif ($view == "pemenang-agen") include("pemenang_agen.php");
elseif ($view == "pemenang-agen-detail") include("pemenang_agen_detail.php");
