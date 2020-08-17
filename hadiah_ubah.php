<?php
$query  = "SELECT * FROM hadiah WHERE id_hdh = '$_GET[id]'";
$sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
$hdh    = mysqli_fetch_array($sql);
?>

<div class="card shadow">
  <div class="card-body">
    <h3 class="text-primary">
      Ubah Hadiah
    </h3>
    <hr class="bg-primary">
    <form action="<?= $path . '/php/hadiah_ubah_aksi.php?id=' . $hdh['id_hdh']; ?>" method="POST">
      <div class=" form-group row">
        <div class="col-10">
          <label for="nama">Nama Hadiah</label>
          <input type="text" class="form-control" name="nama" value="<?= $hdh['nama_hdh']; ?>" required>
        </div>
        <div class="col-2">
          <label for="jumlah">Jumlah</label>
          <input type="number" class="form-control" name="jumlah" value="<?= $hdh['jmlh_hdh']; ?>" required>
        </div>
      </div>
      <button type="submit" class="btn btn-sm btn-primary">Simpan Hadiah</button>
      <a href="?view=hadiah" class="btn btn-sm btn-secondary">Batal / Kembali</a>
    </form>
  </div>
</div>