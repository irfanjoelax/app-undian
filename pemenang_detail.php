<div class="card shadow">
  <div class="card-body">
    <h3 class="text-info">
      Detail Pemenang
      <span class="float-right">
        <a href="?view=pemenang" class="btn btn-sm btn-dark">
          <i class="zmdi zmdi-close"></i>&nbsp; Batal / Kembali
        </a>
      </span>
    </h3>
    <hr class="bg-info">
    <?php
    $query  = "SELECT * FROM peserta INNER JOIN hadiah ON peserta.hdh_id=hadiah.id_hdh WHERE peserta.no_psrt = '$_GET[no]' LIMIT 1";
    $sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $psrt   = mysqli_fetch_array($sql);
    ?>
    <div class="card shadow">
      <div class="card-body">
        <span class="text-info">No. Peserta:</span>
        <h4 class="card-title"><?= $psrt['no_psrt']; ?></h4>
        <br>
        <span class="text-info">Nama Peserta:</span>
        <h5 class="card-text"><?= $psrt['nm_psrt']; ?></h5>
        <br>
        <span class="text-info">Hadiah:</span>
        <h5 class="card-text"><?= $psrt['nama_hdh']; ?></h5>
      </div>
    </div>
  </div>
</div>