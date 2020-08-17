<div class="card shadow">
  <div class="card-body">
    <h3 class="text-success">
      Tambah Peserta
    </h3>
    <hr class="bg-success">
    <form action="<?= $path . '/php/peserta_tambah_aksi.php'; ?>" method="POST" enctype="multipart/form-data">
      <div class="form-group row">
        <div class="col-6">
          <label for="nomer">No. Peserta</label>
          <input type="text" class="form-control" name="nomer" placeholder="masukkan nomer peserta.." autofocus required>
        </div>
      </div>
      <div class="form-group">
        <label for="nama">Nama Peserta</label>
        <input type="text" class="form-control" name="nama" placeholder="masukkan nama peserta.." required>
      </div>
      <button type="submit" class="btn btn-sm btn-success">Simpan Peserta</button>
      <a href="?view=peserta" class="btn btn-sm btn-secondary">Batal / Kembali</a>
    </form>
  </div>
</div>