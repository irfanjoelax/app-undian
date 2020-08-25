<div class="card shadow">
  <div class="card-body">
    <h3 class="text-primary">
      Tambah Hadiah
    </h3>
    <hr class="bg-primary">
    <form action="<?= $path . '/php/hadiah_tambah_aksi.php'; ?>" method="POST">
      <div class=" form-group row">
        <div class="col-8">
          <label for="nama">Nama Hadiah</label>
          <input type="text" class="form-control" name="nama" placeholder="masukkan nama hadiah.." autofocus required>
        </div>
        <div class="col-2">
          <label for="urut">Urutan</label>
          <input type="number" class="form-control" name="urut" placeholder="0" required>
        </div>
        <div class="col-2">
          <label for="jumlah">Jumlah</label>
          <input type="number" class="form-control" name="jumlah" placeholder="0" required>
        </div>
      </div>
      <button type="submit" class="btn btn-sm btn-primary"><i class="zmdi zmdi-save"></i>&nbsp;Simpan Hadiah</button>
      <a href="?view=hadiah" class="btn btn-sm btn-secondary"><i class="zmdi zmdi-close"></i>&nbsp;Batal / Kembali</a>
    </form>
  </div>
</div>