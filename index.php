<?php
include('php/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?></title>

  <link rel="stylesheet" href="vendor/bootstrap4/bootstrap.css">
  <link rel="stylesheet" href="vendor/material-icon/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="vendor/datatables/jquery.dataTables.min.css">
</head>

<body>
  <!-- navbar -->
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white border-bottom shadow py-3">
    <div class="container">
      <span class="navbar-brand my-2 h1 text-uppercase"><?= $title; ?></span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="btn btn-primary mr-3 my-2" href="<?= $path; ?>">
            <i class="zmdi zmdi-layers"></i>&nbsp; Beranda
          </a>
          <a class="btn btn-warning mr-3 my-2 text-white" href="#">
            <i class="zmdi zmdi-refresh"></i>&nbsp; Undian
          </a>
          <a class="btn btn-success mr-3 my-2" href="?view=peserta">
            <i class="zmdi zmdi-accounts-alt"></i>&nbsp; Daftar Peserta
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- konten -->
  <?php include_once("php/konten.php"); ?>


  <script src="vendor/jquery/jquery-3.5.1.min.js"></script>
  <script src="vendor/bootstrap4/bootstrap.bundle.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.dataTable').DataTable({
        "processing": true,
        "serverside": true,
        "ordering": false,
        "language": {
          "url": "vendor/datatables/Indonesian.json"
        }
      });
    });
  </script>
  <script>
    function imgPreview() {
      const gambar = document.querySelector('#foto');
      const gambarLabel = document.querySelector('.custom-file-label');
      const gambarPreview = document.querySelector('.img-preview');

      gambarLabel.textContent = gambar.files[0].name;

      const fileGambar = new FileReader();
      fileGambar.readAsDataURL(gambar.files[0]);
      fileGambar.onload = function(e) {
        gambarPreview.src = e.target.result;
      }
    }
  </script>
</body>

</html>