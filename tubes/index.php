<?php 
require 'functions.php';
$data = query("SELECT * FROM obat");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Apotek</title>
</head>
<body id="home" >
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-darks shadow-sm fixed-top" style="background-color:#4ABDAC;">
    
    <div class="container">
      
    <a class="navbar-brand fw-bold h1" href="#">Apotek</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item  fw-bold m-1" style="background-color:#F7B733 ;">
              <a class="nav-link active" aria-current="page" href="#home">Obat</a>
            </li>
            <li class="nav-item   fw-bold m-1" style="background-color:#F7B733 ;">
                <a class="nav-link" href="../tubes/registrasi.php">Register</a>
            </li>
            <li class="nav-item  fw-bold m-1" style="background-color:#F7B733 ;">
                <a class="nav-link" href="../tubes/pages/login.php">Masuk</a>
            </li>
          </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->
  <div style="background-image:url('img/banner.jpg') ; height: 300px;background-repeat: no-repeat;background-size:1500px auto; margin-top: 56px;" >
        <div class="text-center" style="padding-top:100px ;">
          <h1>APOTEK</h1>
        </div>
    </div>
  <!-- About -->
  <section id="about">
    <div class="container pt-5 mt-5">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Daftar Obat</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-center">
        <?php foreach($data as $item):?>
          <div class="col-md-4 pt-3 mt-3">
      <div class="card" style="width: 18rem;">
      <img src="img/<?= $item["gambar"]; ?>"class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $item["nama_obat"]; ?></h5>
        <p class="card-text"></p>
        <a href="detail.php?id=<?= $item['kode_obat']?>" class="btn btn-primary">Detail Obat</a>
      </div>
    </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,128L48,138.7C96,149,192,171,288,154.7C384,139,480,85,576,101.3C672,117,768,203,864,224C960,245,1056,203,1152,192C1248,181,1344,203,1392,213.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

  </section>
  <!-- Akhir About -->
  <!-- Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 </body>