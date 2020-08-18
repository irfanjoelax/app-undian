<?php
include('php/koneksi.php');

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
    <div class="container">
      <span class="navbar-brand my-2 h4 text-uppercase"><?= $title; ?></span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="btn btn-sm btn-warning text-white ml-3 my-2" href="<?= $path; ?>">
            <i class="zmdi zmdi-layers"></i>&nbsp; Beranda
          </a>
          <a class="btn btn-sm btn-danger ml-3 my-2 text-white" href="?view=undian">
            <i class="zmdi zmdi-refresh"></i>&nbsp; Undian
          </a>
          <a class="btn btn-sm btn-primary ml-3 my-2" href="?view=hadiah">
            <i class="zmdi zmdi-mall"></i>&nbsp; Daftar Hadiah
          </a>
          <a class="btn btn-sm btn-success ml-3 my-2" href="?view=peserta">
            <i class="zmdi zmdi-accounts-alt"></i>&nbsp; Daftar Peserta
          </a>
          <a class="btn btn-sm btn-info ml-3 my-2" href="?view=pemenang">
            <i class="zmdi zmdi-account-box"></i>&nbsp; Daftar Pemenang
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- KONTEN -->
  <section class="mb-4">
    <div class="container">
      <div class="row">
        <!-- PANEL KIRI -->
        <div class="col-lg-3 mt-4">
          <div class="card bg-warning text-white">
            <div class="card-body">
              <h6 class="card-title">
                Total Peserta:
                <span class="float-right"><i class="zmdi zmdi-accounts-alt"></i></span>
              </h6>
              <h4 class="text-center"><?= number_format($totalPeserta); ?></h4>
            </div>
          </div>
          <div class="card bg-danger text-white mt-3">
            <div class="card-body">
              <h6 class="card-title">
                Total Pemenang:
                <span class="float-right"><i class="zmdi zmdi-account-box"></i></span>
              </h6>
              <h4 class="text-center"><?= number_format($totalPemenang); ?></h4>
            </div>
          </div>
          <div class="card bg-primary text-white mt-3">
            <div class="card-body">
              <h6 class="card-title">
                Sisa Peserta:
                <span class="float-right"><i class="zmdi zmdi-account"></i></span>
              </h6>
              <h4 class="text-center"><?= number_format($sisaPeserta); ?></h4>
            </div>
          </div>
          <div class="card bg-success text-white mt-3">
            <div class="card-body">
              <h6 class="card-title">
                Total Hadiah:
                <span class="float-right"><i class="zmdi zmdi-mall"></i></span>
              </h6>
              <h4 class="text-center"><?= number_format($totalHadiah); ?></h4>
            </div>
          </div>
        </div>

        <!-- PANEL KANAN Atau KONTEN UTAMA -->
        <div class="col-lg-9 mt-4">
          <?php include_once("php/konten.php"); ?>
        </div>
      </div>
    </div>
  </section>

  <!-- JAVASCRIPT FILE -->
  <script src="vendor/jquery/jquery-3.5.1.min.js"></script>
  <script src="vendor/bootstrap4/bootstrap.bundle.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/init.dataTables.js"></script>
  <script src="vendor/sweetalert/sweetalert.min.js"></script>
  <script src="js/image.preview.js"></script>
  <script src="js/undian.js"></script>
</body>

</html>