$(document).ready(function () {
  // jika tombol acak diklik
  $("#btnAcak").click(function () {
    // show modal
    $("#prosesModal").modal("show");

    // proses ajax jQuery
    $.ajax({
      type: "GET",
      url: "php/peserta_terdaftar.php",
      dataType: "JSON",
      success: function (response) {
        // tangkap data dari database
        let data = response[0];

        // set timeout loading aplikasi
        setTimeout(function () {
          // hide modal
          $("#prosesModal").modal("hide");

          // parsing ke view
          $("#noPemenang").text(data.no);
          $("#namaPemenang").text(data.nm);
          $("#btnSimpan").removeAttr("disabled");
          $("#btnSimpan").attr("onclick", "savePemenang(" + data.no + ")");
        }, 4000);
      },
    });
  });
});

function showButtonAcak() {
  $("#btnAcak").removeAttr("disabled");
}

function savePemenang(noPeserta) {
  // ambil nilai dari ID Hadiah
  let hadiah = $("#hadiah").val();

  $.ajax({
    type: "POST",
    url: "php/pemenang_simpan.php",
    data: {
      no: noPeserta,
      id: hadiah,
    },
    success: function (response) {
      swal("Berhasil!", "Data pemenang terlah berhasil disimpan", "success", {
        button: false,
        timer: 1000,
      });

      setInterval(function () {
        window.location.replace("?view=undian");
      }, 1000);
    },
  });
}
