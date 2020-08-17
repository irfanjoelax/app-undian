<div class="card shadow">
  <div class="card-body">
    <!-- label header -->
    <h3 class="text-primary">
      Daftar Hadiah
      <span class="float-right">
        <a href="?view=peserta-tambah" class="btn btn-sm btn-primary">
          <i class="zmdi zmdi-plus"></i>&nbsp; Tambah
        </a>
      </span>
    </h3>

    <hr class="bg-primary">

    <!-- tabel peserta -->
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <table class="table table-striped dataTable">
            <thead>
              <tr>
                <th scope="row" width="40">No.</th>
                <th scope="row">Hadiah</th>
                <th scope="row">&nbsp;</th>
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
                  <td scope="col"><?= $no++ ?></td>
                  <td><?= $psrt['nama_hdh']; ?></td>
                  <td>
                    <div class="btn-group" role="group">
                      <a href="?view=peserta-ubah&id=<?= $psrt['id_hdh']; ?>" class="btn btn-sm btn-secondary">Ubah</a>
                      <a href="?view=peserta-hapus&id=<?= $psrt['id_hdh']; ?>" class="btn btn-sm btn-dark">Hapus</a>
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