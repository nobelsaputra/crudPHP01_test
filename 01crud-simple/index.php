<?php 
// koneksikan ke database di koneksi.php
include "connection/koneksi.php";

$query = "SELECT * FROM crud_very_simple";
$sql = mysqli_query($conn, $query);


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRUD SIMPLE</title>
    <!--================ BOOTSTRAP 5 LINK ONLINE ================ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- ================ AOS SISTEM (ANIMATION) ================ -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- ================ MENYAMBUNGKAN KE style.css ================ -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- ================ FONT AWESOME ICON ================ -->
    <script src="https://kit.fontawesome.com/357301bb56.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- NAVBAR START -->
    <section>
      <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item links">
                <a class="nav-link" aria-current="page" href="#">HOME</a>
              </li>
              <li class="nav-item links">
                <a class="nav-link" href="#">GANTI</a>
              </li>
              <li class="nav-item links">
                <a class="nav-link" href="#">GANTI</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <!-- NAVBAR END -->

    <!-- DISPLAY START -->
    <div class="hero vh-100 d-flex align-items-center">
      <div class="container">
      <a href="aksi/kelola.php?tambah=1" class="btn btn-dark btn-lg mb-5">Tambah Data</a>
        <div class="row">
         <?php 
            while ($result = mysqli_fetch_assoc($sql)){
          ?>
          <div class="col-md-4">
            <div class="card">
            <img class="card-img-top" src="image/<?= $result['gambar'] ?>" alt="Title">
              <div class="card-body">
                <h4 class="card-title"><?= $result["judul"] ?></h4>
                <h5><?= $result["nama"] ?></h5>
                <p class="card-text"><?= $result["artikel"] ?></p>
                <a class="btn btn-danger" href="aksi/proses.php?hapus=<?= $result['id'] ?>" onclick="return confirm('apakah kamu yakin?')">Hapus</a>
                <a class="btn btn-success" href="aksi/kelola.php?edit=<?= $result['id'] ?>">Edit</a>
              </div>
            </div>
          </div>
          <?php 
            }
            ?>
        </div>
      </div>
    </div>
    <script>
      AOS.init();
    </script>
    <script src="main.js"></script>
  </body>
</html>
