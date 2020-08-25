function hideModal() {
  $("#popupModal").modal("hide");
}

function prosesUndian() {
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
          window.location.replace("undian.php");
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
          $("#noPemenang").text("No. Peserta: " + data.no);
          $("#btnSimpan").attr("onclick", "savePemenang(" + data.no + ")");
          $("#btnUlang").attr("onclick", "ulangUndian(" + data.no + ")");

          setTimeout(function () {
            $("#popupModal").modal("show");
          }, 800);
        }, 3000);
      }
    },
  });
}

// fungsi simpan pemenang
function savePemenang(noPeserta) {
  // ambil nilai dari ID Hadiah
  let hadiah = $("#idHdh").val();

  $.ajax({
    type: "POST",
    url: "php/pemenang_simpan.php",
    data: {
      no: noPeserta,
      id: hadiah,
    },
    success: function (response) {
      $("#popupModal").modal("hide");

      swal("Berhasil!", "Data pemenang telah berhasil disimpan", "success", {
        button: false,
        timer: 1000,
      });

      setInterval(function () {
        window.location.replace("undian.php");
      }, 1000);
    },
  });
}

function ulangUndian(noPeserta) {
  $.ajax({
    type: "POST",
    url: "php/peserta_hangus.php",
    data: {
      no: noPeserta,
    },
    success: function (response) {
      $("#popupModal").modal("hide");
    },
  });
  prosesUndian();
}
