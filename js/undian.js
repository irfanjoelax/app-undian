function prosesUndian() {
  var acak = new Howl({
    src: ["./audio/acak.mp3"],
    volume: 0.4,
    loop: true,
  });

  var selesai = new Howl({
    src: ["./audio/selesai.mp3"],
    volume: 1,
  });

  // proses ajax jQuery
  $.ajax({
    type: "GET",
    url: "php/agen_terdaftar.php",
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
        acak.play();
        // show modal
        $("#prosesModal").modal("show");

        // tangkap data dari database
        let data = response[0];

        // set timeout loading aplikasi
        setTimeout(function () {
          // hide modal
          acak.stop();
          $("#prosesModal").modal("hide");

          // parsing ke view
          $("#noPemenang").text("No. Peserta: " + data.no);
          $("#tlpPemenang").text("Telepon: " + data.tlp);
          $("#btnSimpan").attr("onclick", "savePemenang(" + data.id + ")");
          $("#btnUlang").attr("onclick", "ulangUndian(" + data.id + ")");

          selesai.play();

          setTimeout(function () {
            $("#popupModal").modal("show");
          }, 800);
        }, 10000);
      }
    },
  });
}

// fungsi simpan pemenang
function savePemenang(idAgen) {
  // ambil nilai dari ID Hadiah
  let hadiah = $("#idHdh").val();

  $.ajax({
    type: "POST",
    url: "php/pemenang_simpan.php",
    data: {
      agen: idAgen,
      id: hadiah,
    },
    success: function (response) {
      $("#popupModal").modal("hide");

      swal("Berhasil!", "Data pemenang telah berhasil disimpan", "success", {
        button: false,
        timer: 1000,
      });

      // setInterval(function () {
      //   window.location.replace("undian.php");
      // }, 1000);
    },
  });
}

function ulangUndian(idAgen) {
  // $.ajax({
  //   type: "POST",
  //   url: "php/agen_hangus.php",
  //   data: {
  //     no: idAgen,
  //   },
  //   success: function (response) {
  //     $("#popupModal").modal("hide");
  //   },
  // });
  $("#popupModal").modal("hide");
  prosesUndian();
}
