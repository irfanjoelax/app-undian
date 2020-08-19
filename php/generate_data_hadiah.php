<?php

require_once '../vendor/autoload.php';
require_once 'koneksi.php';

// set faker create object
$faker = Faker\Factory::create('id_ID');

// generate berapa kali ?
for ($i = 0; $i < 5; $i++) {
  // random jumlah hadiah
  $jumlah = rand(1, 10);


  // proses query database
  $query  = "INSERT INTO hadiah SET nama_hdh = '$faker->name', jmlh_hdh = '$jumlah', psrt_id = 0";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
}

// notif
echo "tambah data dummy hadiah berhasil";
exit;
