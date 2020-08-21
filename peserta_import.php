<div class="card shadow">
  <div class="card-body">
    <h3 class="text-success">
      Import Data Peserta
      <span class="float-right">
        <a href="<?= $path . '/database/contoh_import.xlsx'; ?>" class="btn btn-sm btn-success">
          <i class="zmdi zmdi-download"></i>&nbsp; Download Contoh Excel
        </a>
      </span>
    </h3>
    <hr class="bg-success">
    <form action="<?= $path . '/php/peserta_import_excel.php'; ?>" method="POST" enctype="multipart/form-data">
      <div class="form-group row">
        <div class="col">
          <label for="nomer">File Excel</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="excel" id="customFile" autofocus required>
            <label class="custom-file-label" for="customFile">Format file excel (xls / xlsx)</label>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-sm btn-success"><i class="zmdi zmdi-save"></i>&nbsp;Simpan Peserta</button>
      <a href="?view=peserta" class="btn btn-sm btn-secondary"><i class="zmdi zmdi-close"></i>&nbsp;Batal / Kembali</a>
    </form>
  </div>
</div>