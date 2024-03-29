<?php

include 'koneksi.php';

include './includes/header.php';
include './includes/navigation.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin || SMPN 3 Talaga</title>
</head>

<div class="content">

  <div class="container">

    <div class="box">

      <div class="box-header">Dashboard</div>

      <div class="box-body">
        <h5> Selamat Datang <?= $_SESSION['uname'] ?> di Panel Admin SMPN 3 Talaga</h5>
      </div>

    </div>

  </div>
</div>

<main>
  <div class="row">
    <div class="col-12 col-md-4 d-flex justify-content-center">
      <a href="dash_ppdb.php">
        <div class="item">
          <p class="h4 fw-bold">Daftar PPDB</p> <!-- SUDAH SELESAI -->
          <img src="media/dash/Register.png" alt="">
        </div>
      </a>
    </div>

    <div class="col-12 col-md-4 d-flex justify-content-center">
      <a href="dash_pembelajaran.php">
        <div class="item">
          <p class="h4 fw-bold">Pembelajaran</p> <!-- SUDAH SELESAI -->
          <img src="media/dash/notebook.png" alt="">
        </div>
      </a>
    </div>

    <div class="col-12 col-md-4 d-flex justify-content-center">
      <a href="dash_guru.php">
        <div class="item">
          <p class="h4 fw-bold">Daftar Guru</p> <!-- SUDAH SELESAI -->
          <img src="media/dash/teacher.png" alt="">
        </div>
      </a>
    </div>

    <div class="col-12 col-md-4 d-flex justify-content-center">
      <a href="dash_admin.php">
        <div class="item">
          <img src="media/dash/admin.png" alt="">
          <p class="h4 fw-bold">Daftar Admin</p> <!-- SUDAH SELESAI -->
        </div>
      </a>
    </div>

    <div class="col-12 col-md-4 d-flex justify-content-center">
      <a href="dash_berita.php">
        <div class="item">
          <img src="media/dash/News.png" alt="">
          <p class="h4 fw-bold">Daftar Berita</p>
        </div>
      </a>
    </div>

    <div class="col-12 col-md-4 d-flex justify-content-center">
      <a href="dash_profil.php">
        <div class="item">
          <img src="media/dash/school.png" alt="">
          <p class="h4 fw-bold">Profil Sekolah</p>
        </div>
      </a>
    </div>

    <div class="col-12 col-md-4 d-flex justify-content-center">
      <a href="dash_fotoutama.php">
        <div class="item">
          <img src="media/dash/Image.png" alt="">
          <p class="h4 fw-bold">Foto Utama</p>
        </div>
      </a>
    </div>


  </div>
</main>

<?php include './includes/footer.php' ?>