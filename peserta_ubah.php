<?php
$query  = "SELECT * FROM peserta WHERE id_psrt = '$_GET[id]'";
$sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
$psrt   = mysqli_fetch_array($sql);
?>

<div class="card shadow">
  <div class="card-body">
    <h3 class="text-success">
      Ubah Peserta
    </h3>
    <hr class="bg-success">
    <form action="<?= $path . '/php/peserta_ubah_aksi.php?id=' . $psrt['id_psrt']; ?>" method="POST">
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
      <button type="submit" class="btn btn-sm btn-success">Simpan Peserta</button>
      <a href="?view=peserta" class="btn btn-sm btn-secondary">Batal / Kembali</a>
    </form>
  </div>
</div>