$(document).ready(function () {
  // jika tombol acak diklik
  $("#btnAcak").click(function () {
    // proses ajax jQuery
    $.ajax({
      type: "GET",
      url: "php/peserta_terdaftar.php",
      dataType: "JSON",
      success: function (response) {
        // jika data peserta masih kosong
        if (response.toString() == "") {
          swal("Informasi!", "Data peserta masih kosong", "info", {
            button: false,
            timer: 3000,
          });
          setInterval(function () {
            window.location.replace("?view=undian");
          }, 1000);
        }

        // jika data peserta ada
        else {
          // show modal
          $("#prosesModal").modal("show");

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
        }
      },
    });
  });
});

// fungction untuk memunculkan tombol acak
function showButtonAcak() {
  $("#btnAcak").removeAttr("disabled");
}

// fungsi simpan pemenang
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
      swal("Berhasil!", "Data pemenang telah berhasil disimpan", "success", {
        button: false,
        timer: 1000,
      });

      setInterval(function () {
        window.location.replace("?view=undian");
      }, 1000);
    },
  });
}
