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
    $query  = "SELECT * FROM agen INNER JOIN hadiah ON agen.hdh_id=hadiah.id_hdh WHERE agen.no_agen = '$_GET[no]' LIMIT 1";
    $sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $agen   = mysqli_fetch_array($sql);
    ?>
    <div class="card shadow">
      <div class="card-body">
        <span class="text-info">No. Peserta:</span>
        <h4 class="card-title"><?= $agen['no_agen']; ?></h4>
        <br>
        <span class="text-info">Nama Peserta:</span>
        <h5 class="card-text"><?= $agen['nm_agen']; ?></h5>
        <br>
        <span class="text-info">Hadiah:</span>
        <h5 class="card-text"><?= $agen['nama_hdh']; ?></h5>
      </div>
    </div>
  </div>
</div>