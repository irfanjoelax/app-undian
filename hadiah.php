<div class="card shadow">
  <div class="card-body">
    <!-- label header -->
    <h3 class="text-primary">
      Daftar Hadiah
      <span class="float-right">
        <a href="?view=hadiah-tambah" class="btn btn-sm btn-primary">
          <i class="zmdi zmdi-plus"></i>&nbsp; Tambah
        </a>
      </span>
    </h3>

    <hr class="bg-primary">

    <!-- tabel hadiah -->
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <table class="table table-striped dataTable">
            <thead>
              <tr>
                <th width="40">No.</th>
                <th>Hadiah</th>
                <th width="40" class="text-right">Jumlah</th>
                <th width="80">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no     = 1;
              $query  = "SELECT * FROM hadiah ORDER BY id_hdh DESC";
              $sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
              while ($psrt = mysqli_fetch_array($sql)) :
              ?>
                <tr>
                  <td class="text-center"><?= $no++ ?></td>
                  <td><?= $psrt['nama_hdh']; ?></td>
                  <td class="text-right"><?= $psrt['jmlh_hdh']; ?></td>
                  <td class="text-center">
                    <div class="btn-group" role="group">
                      <a href="?view=hadiah-ubah&id=<?= $psrt['id_hdh']; ?>" class="btn btn-sm btn-secondary">Ubah</a>
                      <a href="?view=hadiah-hapus&id=<?= $psrt['id_hdh']; ?>" class="btn btn-sm btn-dark">Hapus</a>
                    </div>
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