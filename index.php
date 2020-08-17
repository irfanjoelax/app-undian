<?php
include('php/koneksi.php');

$query  = "SELECT * FROM peserta WHERE stts_psrt = 1 ORDER BY id_psrt DESC";
$sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));

$query2   = "SELECT * FROM peserta";
$sql2      = mysqli_query($conn, $query2) or die(mysqli_error($conn));

$query3   = "SELECT * FROM hadiah";
$sql3      = mysqli_query($conn, $query3) or die(mysqli_error($conn));

$totalPemenang  = mysqli_num_rows($sql);
$totalPeserta   = mysqli_num_rows($sql2);
$totalHadiah    = mysqli_num_rows($sql3);
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
          <a class="btn btn-warning text-white ml-3 my-2" href="<?= $path; ?>">
            <i class="zmdi zmdi-layers"></i>&nbsp; Beranda
          </a>
          <a class="btn btn-danger ml-3 my-2 text-white" href="?view=undian">
            <i class="zmdi zmdi-refresh"></i>&nbsp; Undian
          </a>
          <a class="btn btn-primary ml-3 my-2" href="?view=hadiah">
            <i class="zmdi zmdi-mall"></i>&nbsp; Daftar Hadiah
          </a>
          <a class="btn btn-success ml-3 my-2" href="?view=peserta">
            <i class="zmdi zmdi-accounts-alt"></i>&nbsp; Daftar Peserta
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- konten -->
  <section>
    <div class="container">
      <div class="row">
        <!-- panel kiri -->
        <div class="col-lg-3 mt-4">
          <div class="card bg-warning text-white">
            <div class="card-body">
              <h5 class="card-title">
                Total Peserta:
                <span class="float-right">i</span>
              </h5>
              <h1 class="text-center"><?= number_format($totalPeserta); ?></h1>
            </div>
          </div>
          <div class="card bg-danger text-white mt-3">
            <div class="card-body">
              <h5 class="card-title">
                Total Pemenang:
                <span class="float-right">i</span>
              </h5>
              <h1 class="text-center"><?= number_format($totalPemenang); ?></h1>
            </div>
          </div>
          <div class="card bg-primary text-white mt-3">
            <div class="card-body">
              <h5 class="card-title">
                Total Hadiah:
                <span class="float-right">i</span>
              </h5>
              <h1 class="text-center"><?= number_format($totalHadiah); ?></h1>
            </div>
          </div>
        </div>

        <!-- konten -->
        <div class="col-lg-9 mt-4">
          <?php include_once("php/konten.php"); ?>
        </div>
      </div>
    </div>
  </section>



  <script src="vendor/jquery/jquery-3.5.1.min.js"></script>
  <script src="vendor/bootstrap4/bootstrap.bundle.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/init.dataTables.js"></script>
  <script src="js/image.preview.js"></script>
  <script>
    // load default tombol acak
    $('#btnAcak').text('Acak Undian');

    $(document).ready(function() {
      // jika tombol acak diklik
      $('#btnAcak').click(function() {

        // set tombol acak proses
        $('#btnAcak').text('Sedang Proses..');
        $('#btnAcak').removeClass('btn-warning');
        $('#btnAcak').toggleClass('btn-danger');
        $('#btnAcak').addClass('disabled');

        // efek animasi loading
        $('#fotoAcak').attr('src', '<?= $path . '/img/loader.gif' ?>');

        // proses ajax jQuery
        $.ajax({
          type: "GET",
          url: "<?= $path . '/php/peserta_terdaftar.php' ?>",
          dataType: "JSON",
          success: function(response) {
            // tangkap data dari database
            let data = response[0];

            setTimeout(function() {
              // set tombol
              $('#btnAcak').text('Acak Undian');
              $('#btnAcak').removeClass('btn-danger');
              $('#btnAcak').toggleClass('btn-warning');
              $('#btnAcak').removeClass('disabled');

              // parsing ke view 
              $('#noPemenang').text(data.no);
              $('#namaPemenang').text(data.nm);
              $('#fotoAcak').attr('src', '<?= $path . '/img/peserta/' ?>' + data.foto);
              $('#btnSimpan').removeClass('disabled');
              $('#btnSimpan').attr('href', '<?= $path . '/php/peserta_simpan.php?no=' ?>' + data.no);
            }, 2000);
          }
        });
      });
    });
  </script>
</body>

</html>