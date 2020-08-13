function imgPreview() {
  const gambar = document.querySelector("#foto");
  const gambarLabel = document.querySelector(".custom-file-label");
  const gambarPreview = document.querySelector(".img-preview");

  gambarLabel.textContent = gambar.files[0].name;

  const fileGambar = new FileReader();
  fileGambar.readAsDataURL(gambar.files[0]);
  fileGambar.onload = function (e) {
    gambarPreview.src = e.target.result;
  };
}
