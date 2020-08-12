<section class="mt-3">
  <div class="container">

    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h3>
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
          <div class="form-group row">
            <div class="col-3">
              <img src="<?= $path ?>/img/peserta/default.png" class="img-thumbnail img-preview">
            </div>
            <div class="col-9">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Foto</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="foto" id="foto" onchange="imgPreview()">
                  <label class="custom-file-label" for="foto">Silakan Pilih Foto Peserta</label>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-success">Simpan</button>
          <a href="?view=peserta" class="btn btn-secondary">Batal/Kembali</a>
        </form>
      </div>
    </div>
  </div>
</section>