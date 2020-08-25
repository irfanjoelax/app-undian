<?php

// include file koneksi & bcrypt
include('php/koneksi.php');
include('php/bcrypt.php');

$query    = "SELECT * FROM peserta WHERE stts_psrt = 1";
$sql      = mysqli_query($conn, $query) or die(mysqli_error($conn));

$query2   = "SELECT * FROM peserta";
$sql2     = mysqli_query($conn, $query2) or die(mysqli_error($conn));

$query3   = "SELECT * FROM hadiah WHERE jmlh_hdh != 0";
$sql3     = mysqli_query($conn, $query3) or die(mysqli_error($conn));

$query4   = "SELECT * FROM peserta WHERE stts_psrt = 0";
$sql4     = mysqli_query($conn, $query4) or die(mysqli_error($conn));

$totalPemenang  = mysqli_num_rows($sql);
$totalPeserta   = mysqli_num_rows($sql2);
$totalHadiah    = mysqli_num_rows($sql3);
$sisaPeserta    = mysqli_num_rows($sql4);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- TITLE -->
  <title><?= $title; ?></title>

  <!-- FAVICON -->
  <link rel="shortcut icon" href="<?= $path . '/img/box.png'; ?>" type="image/x-icon">

  <!-- CSS FILE -->
  <link rel="stylesheet" href="vendor/bootstrap4/bootstrap.css">
  <link rel="stylesheet" href="vendor/material-icon/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="vendor/datatables/jquery.dataTables.min.css">
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white border-bottom shadow py-3">
    <div class="container-fluid justify-content-between">
      <a class="navbar-brand" href="#">
        <img class="rounded" src="<?= $path . '/img/golkar.png'; ?>" width="100">
      </a>
      <span class="h3 text-uppercase"><?= $title; ?></span>
      <a class="navbar-brand" href="#">
        <img class="rounded" src="<?= $path . '/img/pdip.jpg'; ?>" width="100">
      </a>
    </div>
  </nav>

  <!-- JUMBOTRON -->
  <div class="jumbotron bg-white text-center">
    <h1 class="display-4">Selamat Datang!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="bg-warning my-4 mb-5">
    <?php
    $no     = 1;
    $query  = "SELECT * FROM hadiah WHERE jmlh_hdh != 0 ORDER BY urut_hdh ASC LIMIT 1";
    $sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $hdh    = mysqli_fetch_array($sql);
    $jum    = mysqli_num_rows($sql);
    ?>
    <h3><?= ($jum > 0) ? $hdh['nama_hdh'] : 'Hadiah Telah Habis'; ?></h3>
    <input type="hidden" id="idHdh" value="<?= $hdh['id_hdh']; ?>">
    <button type="button" onclick="prosesUndian()" class="btn btn-warning text-white rounded-pill btn-lg px-5 mt-lg-4" <?= ($jum > 0) ? '' : 'disabled'; ?>>
      Acak Undian
    </button>
  </div>

  <!-- MODAL PROSES UNDIAN -->
  <div class="modal fade" id="prosesModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center">
          <img src="<?= $path . '/img/line-loader.gif'; ?>" class="img-fluid" alt="Responsive image">
          <p>Sedang Proses Pengundian...</p>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL POP UP PEMENANG UNDIAN -->
  <div class="modal" id="popupModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center py-5">
          <h3 class="text-warning">Selamat Untuk Pemenang!</h3>
          <h4><?= ($jum > 0) ? $hdh['nama_hdh'] : 'Hadiah Telah Habis'; ?></h4>
          <h2 class="mt-5 mb-5" id="noPemenang"></h2>
          <hr class="bg-warning">
          <div class="mt-0">
            <button type="button" id="btnUlang" class="btn btn-danger">Ulang Undian</button>
            <button type="button" id="btnSimpan" class="btn btn-warning text-white">Simpan Pemenang</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JAVASCRIPT FILE -->
  <script src="vendor/jquery/jquery-3.5.1.min.js"></script>
  <script src="vendor/bootstrap4/bootstrap.bundle.min.js"></script>
  <script src="vendor/sweetalert/sweetalert.min.js"></script>
  <script src="js/undian.js"></script>
</body>

</html>