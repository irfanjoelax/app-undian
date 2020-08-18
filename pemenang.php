<div class="card shadow">
  <div class="card-body">
    <!-- label header -->
    <h3 class="text-info">
      Daftar Pemenang
    </h3>

    <hr class="bg-info">

    <!-- tabel peserta -->
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <table class="table table-striped text-center dataTable">
            <thead>
              <tr>
                <th scope="row">No. Peserta</th>
                <th scope="row">Nama Peserta</th>
                <th scope="row">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = "SELECT * FROM peserta WHERE stts_psrt = 1";
              $sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
              while ($psrt = mysqli_fetch_array($sql)) :
              ?>
                <tr>
                  <td><?= $psrt['no_psrt']; ?></td>
                  <td><?= $psrt['nm_psrt']; ?></td>
                  <td>
                    <a href="?view=pemenang-detail&no=<?= $psrt['no_psrt']; ?>" class="btn btn-sm btn-secondary">Detail</a>
                  </td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>