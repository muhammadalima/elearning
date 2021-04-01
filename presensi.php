<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning | Universitas AMIKOM Purwokerto</title>
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="frontend/styles/main.css">
</head>
<body>
  
  <!-- <div class="navbar-fixed">
  <nav>
    <div class="container">
      <div class="nav-wrapper purple darken-4">
        <a href="#" class="brand-logo left">
            <img src="frontend/images/logo.png" alt="Logo E-learning">
        </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="sass.html">Sass</a></li>
        </ul>
      </div>
    </div>
  </div> -->
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark custom-nav">
    <div class="container">
      <a class="navbar-brand" href="index.html"><img src="frontend/images/logo.png" alt="Universitas AMIKOM Purwokerto"></a>
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-link" href="#">Features</a>
          <a class="nav-link" href="#">Pricing</a>
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>
      </div> -->
    </div>
  </nav>

  <div class="container detail-class">
    <div class="menu-class">
      <a href="kelas.html">Materi</a>
      <a href="presensi.php">Presensi</a>
      <a href="tugas.html">Tugas</a>
      <a href="tentang-kelas.html">Tentang Kelas</a>
    </div>  

      <div class="class-content">
        <div class="presensi">
  
          <div class="row justify-content-center pt-4">
            <table class="col-10 table  ">
              <thead>
                <tr>
                  <th scope="col">Pertemuan Ke</th>
                  <th scope="col">Waktu</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td><?= date('H:i j/m/Y'); ?></td>
                  <td><button type="button" class="btn btn-primary">Hadir</button></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td><?= date('H:i j/m/Y'); ?></td>
                  <td><button type="button" class="btn btn-secondary">Presensi belum dimulai</button></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td><?=date('H:i j/m/Y'); ?></td>
                  <td><button type="button" class="btn btn-secondary">Presensi belum dimulai</button></td>
                </tr>
              </tbody>
            </table>
          </div>
          

  
        </div>
      </div>
  </div>

  <script src="frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
  <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
</body>
</html>