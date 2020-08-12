<?php
$query  = "SELECT * FROM peserta WHERE no_psrt = '$_GET[no]'";
$sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
$psrt   = mysqli_fetch_array($sql);
?>
<section class="mt-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h3>
          Tambah Peserta
        </h3>
        <hr class="bg-success">
        <form action="<?= $path . '/php/peserta_ubah_aksi.php'; ?>" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="foto_lama" value="<?= $psrt['foto_psrt']; ?>">
          <div class="form-group row">
            <div class="col-6">
              <label for="nomer">No. Peserta</label>
              <input type="text" class="form-control" name="nomer" value="<?= $psrt['no_psrt']; ?>" required>
            </div>
          </div>
          <div class="form-group">
            <label for="nama">Nama Peserta</label>
            <input type="text" class="form-control" name="nama" value="<?= $psrt['nm_psrt']; ?>" required>
          </div>
          <div class="form-group row">
            <div class="col-3">
              <img src="<?= $path . '/img/peserta/' . $psrt['foto_psrt'] ?>" class="img-thumbnail img-preview">
            </div>
            <div class="col-9">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Foto</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="foto" id="foto" onchange="imgPreview()">
                  <label class="custom-file-label" for="foto"><?= $psrt['foto_psrt']; ?></label>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-success">Simpan</button>
          <a href="?view=peserta-detail&no=<?= $psrt['no_psrt']; ?>" class="btn btn-secondary">Batal/Kembali</a>
        </form>
      </div>
    </div>
  </div>
</section>