<div class="card shadow">
  <div class="card-body">
    <!-- label header -->
    <h3 class="text-success">
      Daftar Peserta
      <span class="float-right ml-2">
        <button type="button" onclick="deleteAll()" class="btn btn-sm btn-dark">
          <i class="zmdi zmdi-delete"></i>&nbsp; Hapus Banyak
        </button>
      </span>
      <span class="float-right ml-2">
        <a href="?view=peserta-import" class="btn btn-sm btn-secondary">
          <i class="zmdi zmdi-collection-item"></i>&nbsp; Import Excel
        </a>
      </span>
      <span class="float-right">
        <a href="?view=peserta-tambah" class="btn btn-sm btn-success">
          <i class="zmdi zmdi-plus"></i>&nbsp; Tambah
        </a>
      </span>
    </h3>

    <hr class="bg-success">

    <!-- tabel peserta -->
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <form action="<?= $path . '/php/peserta_hapus_banyak.php'; ?>" method="post" id="form-delete">
            <table class="table table-striped text-center dataTable">
              <thead>
                <tr>
                  <th scope="row">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" onchange="checkAll(this)" type="checkbox" id="cekAll">
                    </div>
                  </th>
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
                    <td>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input cekByID" name="no[]" type="checkbox" value="<?= $psrt['no_psrt']; ?>">
                      </div>
                    </td>
                    <td><?= $psrt['no_psrt']; ?></td>
                    <td><?= $psrt['nm_psrt']; ?></td>
                    <td>
                      <?= ($psrt['stts_psrt'] == 0) ? '<span class="badge badge-danger">Belum beruntung</span>' : '<span class="badge badge-warning text-white">Menang</span>'; ?>
                    </td>
                    <td>
                      <div class="btn-group" role="group">
                        <a href="?view=peserta-ubah&id=<?= b_encode($psrt['id_psrt']) ?>" class="btn btn-sm btn-secondary"><i class="zmdi zmdi-edit"></i>&nbsp;Ubah</a>
                        <a href="?view=peserta-hapus&id=<?= b_encode($psrt['id_psrt']) ?>" class="btn btn-sm btn-dark"><i class="zmdi zmdi-delete"></i>&nbsp;Hapus</a>
                      </div>
                    </td>
                  </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>