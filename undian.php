<section class="mt-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 mx-auto">
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
          <div class="col-4">
            <div class="card shadow">
              <img src="<?= $path ?>/img/peserta/default.png" class="card-img-top" id="fotoAcak">
            </div>
          </div>
          <div class="col-8">
            <div class="card shadow">
              <div class="card-body">
                <span class="font-weight-bold">No.Peserta: </span>
                <h4 id="noPemenang">xxxxx</h4>
                <span class="font-weight-bold">Nama: </span>
                <h4 id="namaPemenang">xxxxx</h4>
                <div class="row mt-5">
                  <div class="col">
                    <a id="btnSimpan" class="btn btn-block btn-primary disabled">Simpan Pemenang</a>
                  </div>
                  <div class="col">
                    <a href="#" id="btnAcak" class="btn btn-block btn-warning text-white"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>