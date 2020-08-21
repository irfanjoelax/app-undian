<?php

require_once '../vendor/autoload.php';
require_once 'koneksi.php';

// set faker create object
$faker = Faker\Factory::create('id_ID');

// generate berapa kali ?
for ($i = 0; $i < 10; $i++) {
  // proses query database
  $query  = "INSERT INTO peserta SET no_psrt = '$faker->ean8', nm_psrt = '$faker->name', stts_psrt = 0";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
}

// REDIRECT
header('Location: ' . $path . '/?view=peserta');
exit;
