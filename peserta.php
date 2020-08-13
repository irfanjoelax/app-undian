  <section class="mt-3">
    <div class="container">
      <h3>
        Daftar Peserta
        <span class="float-right">
          <a href="?view=peserta-tambah" class="btn btn-sm btn-success">
            <i class="zmdi zmdi-plus"></i>&nbsp; Tambah
          </a>
        </span>
      </h3>
      <hr class="bg-success">
      <div class="row">
        <div class="col-lg-12">
          <div class="table-responsive">
            <table class="table table-striped text-center dataTable">
              <thead>
                <tr>
                  <th scope="row">No. Peserta</th>
                  <th scope="row">Nama Peserta</th>
                  <th scope="row">Status</th>
                  <th scope="row">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = "SELECT * FROM peserta ORDER BY id_psrt DESC";
                $sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
                while ($psrt = mysqli_fetch_array($sql)) :
                ?>
                  <tr>
                    <td><?= $psrt['no_psrt']; ?></td>
                    <td><?= $psrt['nm_psrt']; ?></td>
                    <td>
                      <?= ($psrt['status_psrt'] == 0) ? '<span class="badge badge-danger">Belum berhasil</span>' : '<span class="badge badge-primary">Berhasil</span>'; ?>
                    </td>
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