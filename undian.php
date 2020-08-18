<div class="card shadow">
  <div class="card-body">
    <h3>
      Undian Peserta
      <span class="float-right">
        <a href="?view=undian" class="btn btn-sm btn-secondary">
          <i class="zmdi zmdi-refresh"></i>&nbsp; Ulang Undian
        </a>
      </span>
    </h3>
    <hr class="bg-warning">
    <div class="row">
      <div class="col">
        <form class="form-inline row">
          <div class="col-9">
            <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Hadiah</div>
              </div>
              <select class="custom-select" id="hadiah" onchange="showButtonAcak()" autofocus>
                <option selected>Pilih hadiah...</option>
                <?php
                $no     = 1;
                $query  = "SELECT * FROM hadiah WHERE jmlh_hdh != 0 ORDER BY id_hdh DESC";
                $sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
                while ($hdh = mysqli_fetch_array($sql)) :
                ?>
                  <option value="<?= $hdh['id_hdh']; ?>"><?= $hdh['nama_hdh']; ?></option>
                <?php endwhile; ?>
              </select>
            </div>
          </div>
          <div class="col-3">
            <button type="button" id="btnAcak" class="btn btn-block btn-warning text-white mb-2" disabled><i class="zmdi zmdi-spinner"></i>&nbsp;Acak Undian</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="card shadow mt-3">
  <div class="card-body">
    <h5>No.Peserta: <span class="font-weight-bold" id="noPemenang">xxxxx</span></h5>
    <h5>Nama: <span class="font-weight-bold" id="namaPemenang">xxxxx</span></h5>
    <button id="btnSimpan" class="btn btn-danger mt-3" disabled><i class="zmdi zmdi-save"></i>&nbsp;Simpan Pemenang</button>
  </div>
</div>

<!-- MODAL PROSES UNDIAN -->
<div class="modal fade" id="prosesModal" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center">
        <img src="<?= $path . '/img/line-loader.gif'; ?>" class="img-fluid" alt="Responsive image">
        <p>Sedang Proses...</p>
      </div>
    </div>
  </div>
</div>