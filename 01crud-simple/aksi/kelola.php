<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php 
    if (isset($_GET["tambah"])){
    ?>
    <title>Tambah Data</title>
    <?php 
    } else {
    ?>
    <title>Ubah Data</title>
    <?php 
    }
    ?>
    <!--================ BOOTSTRAP 5 LINK ONLINE ================ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- ================ AOS SISTEM (ANIMATION) ================ -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- ================ MENYAMBUNGKAN KE style.css ================ -->
    <link rel="stylesheet" href="style.css" />
    <!-- ================ FONT AWESOME ICON ================ -->
    <script src="https://kit.fontawesome.com/357301bb56.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <section>
      <div class="container mt-5">
        <div class="row">
          <?php if(isset($_GET["tambah"])){
            echo "<h1 class='fw-medium'>TAMBAH DATA</h1>";
          } else {
            echo "<h1 class='fw-medium'>UBAH DATA</h1>";
          } ?>
          <div class="col-md-4 mt-4">
            <form action="proses.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3 row">
              <label for="judul" class="col-sm-2 col-form-label">Judul</label>
              <div class="col-sm-10">
                <input type="text" class="form-control border-dark" id="judul" name="judul" placeholder="judul artikel..." />
              </div>
            </div>
            <div class="mb-3 row">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control border-dark" id="nama" name="nama" placeholder="nama pembuat..." />
              </div>
            </div>
            <div class="mb-3 row">
              <label for="artikel" class="col-sm-2 col-form-label">Artikel</label>
              <div class="col-sm-10">
                <input type="text" class="form-control border-dark" id="artikel" name="artikel" placeholder="artikel..." />
              </div>
            </div>
            <div class="mb-3 row">
              <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
              <div class="col-sm-10">
                <input type="file" class="form-control border-dark" id="gambar" name="gambar" accept="image/*" />
              </div>
            </div>
            <?php if(isset($_GET["tambah"])){ ?>
            <button type="submit" name="aksi" value="add" class="btn btn-success">Tambah Data</button>
            <?php 
            } else {
            ?>
            <button type="submit" name="aksi" value="edit" class="btn btn-success">Edit Data</button>
            <?php 
            }
            ?>
            <a href="../index.php" type="submit" class="btn btn-danger">Batal</a>
          </div>
         </form>
        </div>
      </div>
    </section>
    <script>
      AOS.init();
    </script>
    <script src="main.js"></script>
  </body>
</html>
