<div class="card shadow">
  <div class="card-body">
    <!-- label header -->
    <h3 class="text-info">
      Daftar Pemenang
      <span class="float-right">
        <a href="<?= $path . '/php/generate_excel_pemenang.php'; ?>" class="btn btn-sm btn-success">
          <i class="zmdi zmdi-collection-item"></i>&nbsp; Export Excel
        </a>
        <a href="<?= $path . '/php/generate_pdf_pemenang.php'; ?>" class="btn btn-sm btn-danger">
          <i class="zmdi zmdi-collection-pdf"></i>&nbsp; Export PDF
        </a>
      </span>
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
              $query = "SELECT * FROM agen WHERE stts_agen = 1";
              $sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
              while ($agen = mysqli_fetch_array($sql)) :
              ?>
                <tr>
                  <td><?= $agen['no_agen']; ?></td>
                  <td><?= $agen['nm_agen']; ?></td>
                  <td>
                    <a href="?view=pemenang-detail&no=<?= $agen['no_agen']; ?>" class="btn btn-sm btn-secondary"><i class="zmdi zmdi-eye"></i>&nbsp;Detail</a>
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