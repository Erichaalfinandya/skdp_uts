<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

require "php/caesar.php";

$token = enkripsi(preg_replace("/[^A-Za-z]/", "", $_SESSION['password']), 5);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body">
  <!-- navbar -->
  <?php require "components/navbar.php"?>
  <!-- /navbar -->

  <!-- content -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card text-center">
          <?php if($_SESSION['rule'] == 'user'){ ?>
            <h5 class="card-header bg-dark" style="color:white;">WELCOME <?= $_SESSION['username'] ?></h5>
            <div class="card-body">
              <img src="img/sma.png" class="rounded" alt="..." style="width:100%;">
              <div class="border-top mt-3 mb-3"></div>
              <h5 class="card-title">SMAN 1 PURWANTORO</h5>
              <p class="card-text">Your token : <b disabled="disabled" class="badge bg-danger"><?= $token ?></b></p>
              <p class="card-text">Use the token to start the test</p>
              <a href="verify.php" class="btn btn-warning">start now</a>
            </div>
          <?php } else if ($_SESSION['rule'] == 'admin') {?>
            <h5 class="card-header bg-dark" style="color:white;">WELCOME <?= $_SESSION['username'] ?></h5>
            <div class="card-body">
              <img src="img/sma.png" class="rounded" alt="..." style="width:100%;">
              <div class="border-top mt-3 mb-3"></div>
              <h5 class="card-title">SMA NEGERI 1 PURWANTORO</h5>
              <button class="btn btn-warning" style="width:100%;">ADMIN DASHBOARD</button>
            </div>
          <?php } else {?>
            <h5 class="card-header bg-dark" style="color:white;">WELCOME</h5>
            <div class="card-body">
              <img src="img/sma.png" class="rounded" alt="..." style="width:100%;">
              <div class="border-top mt-3 mb-3"></div>
              <h5 class="card-title">SMA N 1 PURWANTORO</h5>
              <p class="card-text">SMA NEGERI 1 PURWANTORO merupakan salah satu SMA negeri di kabupaten Wonogiri yang beralamatkan 
                Jl. Raya TegalRejo, Kec. Purwantoro, Kabupaten Wonogiri, Jawa Tengah 57695.  SMA ini memiliki slogan  Smansa Mewah Prestasi Megah, 
                dengan Akreditasi A sekolah ini juga mendapatkan predikat sebagai Sekolah Adiwiyata Nasional Mandiri sejak tahun 2017 oleh Presiden Joko Widodo. 
                Di SMA ini tidak hanya terdapat jurusan ipa ataupun ips, namun terdapat program sekolah vokasi yang dimulai sejak kelas 10.</p>
              <p class="card-text">Yaitu terdapat 3 kelas yang diantaranya : Akuntansi dan Tata Niaga, Teknik Kendaraan Ringan (TKR), Teknik Komputer Jaringan (TKJ) </p>
              <p class="card-text">Yang nantinya akan ada tes ujian vokasi untuk mendapatkan sertifikat dari balai latihan kerja Wonogiri sesuai jurusan kelas yang diambil. 
                Serifikat ini dapat digunkan untuk siswa yang tidak melanjutkan studi ke jenjang yang lebih tinggi. 
                Jadi disaat siswa siswi lulus dari SMA N 1 Purwantoro mereka tidak hanya mendapatkan ilmu akademik akan tetapi juga mendapatkan keahlian dari bidang pilihan tersebut.</p>
                <p class="card-text">Untuk mengikuti Ujian tertulis vokasi secara online ini, Anda harus mendaftarkan akun Anda untuk mendapatkan token. Token digunakan untuk verifikasi saat memulai tes online.</p>
              <a href="register.php" class="btn btn-warning">Register now</a>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <!-- /content -->
</body>
</html>