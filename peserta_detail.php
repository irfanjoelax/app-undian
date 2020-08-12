<section class="mt-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h3>
          Detail Peserta
        </h3>
        <hr class="bg-success">
        <?php
        $query  = "SELECT * FROM peserta WHERE no_psrt = '$_GET[no]'";
        $sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $psrt   = mysqli_fetch_array($sql);
        ?>
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="<?= $path . '/img/peserta/' . $psrt['foto_psrt']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h4 class="card-title"><?= $psrt['no_psrt']; ?></h4>
                <h5 class="card-text"><?= $psrt['nm_psrt']; ?></h5>
                <div class="mt-5">
                  <a href="?view=peserta-ubah&no=<?= $psrt['no_psrt']; ?>" class="btn btn-sm btn-success">Ubah</a>
                  <a href="<?= $path . '/php/peserta_hapus.php?no=' . $psrt['no_psrt']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>