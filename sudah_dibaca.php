<?php 
require 'querydb.php';
$buku = query("SELECT * FROM buku WHERE status_buku = 'sudah' ");
//pencarian

//cek jika tombol cari ditekan
if(isset($_POST["cari"])){
  $buku = cari($_POST["keyword"]);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyLib</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <title>Document</title>
  </head>
  <body class="d-flex justify-content-between">
    <!-- main -->
    <div class="container main-menu">
      <div class="row row-cols-1 row-cols-md-3 gx-5 d-flex justify-content-between">
        <!-- Menu Kiri -->
        <div class="col-md-3 side-kiri pt-3 p-2 pb-5">
          <div class="row">
            <h2 class="text-center pt-5 pb-5">MyLib</h2>
          </div>
          <!-- Link Menu -->
          <a href="index.php" class="row link-menu justify-content-around ">
            <div class="col-md-2"><i class="bi bi-speedometer2"></i></div>
            <div class="col-md-10">Dashboard</div>
          </a>
          <a href="koleksi_buku.php" class="row link-menu justify-content-around ">
            <div class="col-md-2"><i class="bi bi-journal"></i></div>
            <div class="col-md-10">Koleksi Buku</div>
          </a>

          <a href="sudah_dibaca.php" class="row link-menu justify-content-around active1">
            <div class="col-md-2"><i class="bi bi-journal-check"></i></div>
            <div class="col-md-10">Sudah Dibaca</div>
          </a>

          <a href="belum_dibaca.php" class="row link-menu justify-content-around">
            <div class="col-md-2"><i class="bi bi-bookmark"></i></div>
            <div class="col-md-10">Belum Dibaca</div>
          </a>
          <a href="tambah_buku.php" class="row link-menu justify-content-around">
            <div class="col-md-2"><i class="bi bi-plus-circle"></i></div>
            <div class="col-md-10">Tambah Buku</div>
          </a>

          <!-- Akhir Link Menu -->

          <!-- Tombol Keluar -->
          <a class="row button justify-content-around" href="keluar.php">
            <div class="col-md-9 isi">Keluar</div>
            <div class="col-md-3 isi"><i class="bi bi-box-arrow-right bold"></i></div>
          </a>
          <!-- Akhir Tombol Keluar -->
        </div>
        <!-- Akhir Menu Kiri -->

        <!-- Bagian Tengah -->
        <div class="col-md-6 side-tengah">
          <div class="row row-cols-1 row-cols-md-3 g-4 d-flex justify-content-between">
            <!-- judul -->
            <div class="col-md-12">
              <h2 class="fw-bold">Sudah Dibaca</h2>
            </div>
            <!-- Akhir judul  -->

            <!-- Card 1 -->
            <?php foreach($buku as $row) :?>
            <div class="col-md-6">
              <div class="card mb-3 card-putih kecil">
                <div class="row g-0 ">
                  <div class="col-md-4 d-flex align-items-center">
                    <img class=" ms-2 card-img img-fluid" src="gambar/CoverBuku/<?= $row["foto_buku"];?>" alt="gambar" />
                  </div>
                  <div class="col-md-8">
                    <div class="card-body ms-2">
                      <p class="fw-bold"><?= $row["judul_buku"];?></p>
                      <p class="small-text"><?= $row["nama_penulis"];?></p>
                      <!-- Button edit hapus -->
                      <div class="d-flex justify-content-end">
                        <!-- hapus -->
                      <a class="bulet-putih m-1" href="delete.php?id=<?= $row["id_buku"]; ?>"onclick="return confirm('Apakah anda yakin akan menghapus data ini?');" ><i class="bi bi-trash"></i></a>

                      <!-- edit -->
                      <a class="bulet-biru m-1" href="edit.php?id=<?= $row["id_buku"]; ?>"><i class="bi bi-pencil-square"></i></a>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach;?>
            <!-- Akhir Card 1 -->

          </div>
        </div>
        <!-- Akhir Bagian Tengah -->

        <!-- Bagian Kanan -->
        <div class="col-md-3 side-kanan">
          <!-- Pencarian -->
          <div class="row">
            <form action="" class="d-flex justify-content-between" method="POST">
              <input class="form-control form-control-lg-2" type="text" placeholder="Cari Buku" aria-label="default input example" name="keyword" id="cari" />
              <!-- Button cari -->
              <button type="submit" name="cari" class="btn btn-biru d-inline"><i class="bi bi-search"></i></button>
            </form>
          </div>
          <!-- Akhir Pencarian -->

          <!-- Side Bar Bawah Pencarian -->
          <div class="row card-putih mt-4 p-3 fav">
            <img class="rounded-circle mx-auto d-block profil mt-5 mb-4" src="Gambar/FotoProfil/Indah-pp5.png" alt="Foto Profil" />
            <h5 class="text-center fw-bold">Indah Yunita</h5>
            <p class="text-center mb-5">@inyunita_</p>
            <!-- Buku Favorit -->
            <h6 class="fw-bold mb-3">Buku Favoritku</h6>
            <!-- Card Per Buku -->
            <div class="card mb-3" style="max-width: 540px">
              <div class="row g-0">
                <div class="col-md-3 d-flex align-items-center">
                  <img src="Gambar/CoverBuku/Jika Kita Tak pernah Jatuh cinta.jpg" class="img-fluid" alt="buku" />
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <p class="card-title fw-bold">Jika Kita Tak Pernah Jatuh Cinta</p>
                    <p class="card-text">Alvi Syahrin</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Akhir Card Per Buku -->
            <!-- Button Lihat Semua -->
            <a href="favorit.php" class="mt-4 mb-4"><div class="button text-center">Lihat Semua</div></a>
            <!-- Akhir Button Lihat Semua -->
            <!-- Akhir Buku Favorit -->
          </div>
          <!-- Akhir Side Bar Bawah Pencarian -->
        </div>
        <!-- Akhir Bagian Kanan -->
      </div>
    </div>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
  
</body>
</html>