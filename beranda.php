<?php
$query  = "SELECT * FROM peserta WHERE status_psrt = 1 ORDER BY id_psrt DESC";
$sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));

$query2   = "SELECT * FROM peserta";
$sql2      = mysqli_query($conn, $query2) or die(mysqli_error($conn));

$totalPemenang  = mysqli_num_rows($sql);
$totalPeserta   = mysqli_num_rows($sql2);
?>
<!-- dashboard panel -->
<section class="mt-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 my-2">
        <div class="card bg-primary text-white">
          <div class="card-body">
            <h5 class="card-title">
              Total Peserta:
              <span class="float-right">i</span>
            </h5>
            <h1 class="text-center"><?= number_format($totalPeserta); ?></h1>
          </div>
        </div>
      </div>
      <div class="col-lg-6 my-2">
        <div class="card bg-warning text-white">
          <div class="card-body">
            <h5 class="card-title">
              Total Pemenang:
              <span class="float-right">i</span>
            </h5>
            <h1 class="text-center"><?= number_format($totalPemenang); ?></h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- daftar peneriman undian -->
<section class="mt-5">
  <h3 class="text-center">Daftar Pemenang</h3>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="table-responsive">
          <table class="table table-striped text-center dataTable display">
            <thead>
              <tr>
                <th scope="row">No. Peserta</th>
                <th scope="row">Nama Peserta</th>
                <th scope="row">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($psrt = mysqli_fetch_array($sql)) :
              ?>
                <tr>
                  <td><?= $psrt['no_psrt']; ?></td>
                  <td><?= $psrt['nm_psrt']; ?></td>
                  <td>
                    <a href="?view=peserta-detail&no=<?= $psrt['no_psrt']; ?>" class="btn btn-sm btn-dark">Detail</a>
                  </td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>