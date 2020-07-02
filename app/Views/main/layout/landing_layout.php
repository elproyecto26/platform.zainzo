<!DOCTYPE html>
<html>
<head>
  <title>Selamat Datang di Zainzo Cloud</title>
  <link rel="stylesheet" type="text/css" href="<?= base_url('public/assets/style/platform.css') ?>">
  <script src="<?= base_url('public/vendor/jquery/jquery.js') ?>"></script>
  <script src="<?= base_url('public/vendor/bootstrap/js/bootstrap.bundle.js') ?>"></script>
</head>
<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom sticky-top">
    <a class="navbar-brand text-right" href="#">
      <h1 class="m-0 pt-2" style="line-height: 40%">zainzo</h1>
      <small class="text-primary m-0 pb-2">.cloud</small>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mx-1">
          <a class="nav-link" href="#">Tentang Kami</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link" href="#">Artikel</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link" href="#">Forum</a>
        </li>
        <li class="nav-item mx-1 dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Produk
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Zainzo Accounting</a>
            <a class="dropdown-item disabled" href="#">Zainzo POS</a>
            <a class="dropdown-item disabled" href="#">Zainzo Purchasing</a>
            <a class="dropdown-item disabled" href="#">Zainzo Inventory</a>
            <a class="dropdown-item disabled" href="#">Zainzo Factory</a>
            <a class="dropdown-item disabled" href="#">Zainzo HRM</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item disabled" href="#">Zainzo ERP</a>
          </div>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link" href="#">Bantuan</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link" href="#">Kontak Kami</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid">
    <?= $this->renderSection('content') ?>
  </div>
  <div class="container-fluid">
    <div class="row border-top p-5">
      <div class="col-12">
        <div class="row px-5 mx-5 justify-content-center">
          <div class="col-3 align-self-center">
            <h1 class="m-0 pt-2 text-right" style="line-height: 60%">zainzo</h1>
            <p class="text-primary m-0 pb-2 text-right">.cloud</p>
            <p>Copyright <b>PT. Zainzo Berdikari</b></p>
            <p>Semua produk merupakan hasil karya yang dilindungi oleh hukum.</p>
            <p>Segala uji coba untuk melakukan tindak pembajakan transaksi dan fitur-fitur berbayar dapat dikenakan sanksi pidana sesuai hukum yang berlaku.</p>
          </div>
          <div class="col-1"></div>
          <div class="col-2">
            <h5 class="mb-5"><b>Produk</b></h5>
            <p>Zainzo Accounting</p>
            <p>Zainzo POS</p>
            <p>Zainzo Purchasing</p>
            <p>Zainzo Inventory</p>
            <p>Zainzo HRD</p>
            <p>Zainzo Factory</p>
            <p>Zainzo Platform</p>
          </div>
          <div class="col-2">
            <h5 class="mb-5"><b>Kontak</b></h5>
            <p>(031) 2434-23423323-342</p>
          </div>
          <div class="col-2">
            <h5 class="mb-5"><b>Partner</b></h5>
            <p>Mie Ikan Surabaya</p>
            <p>Eggys</p>
          </div>
          <div class="col-2"></div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>