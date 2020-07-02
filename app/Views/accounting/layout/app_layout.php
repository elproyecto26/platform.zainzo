<!DOCTYPE html>
<html>
<head>
  <title><?= $title['page'] ?></title>
  <link rel="stylesheet" type="text/css" href="<?= base_url('public/assets/style/accounting.css') ?>">
  <script src="<?= base_url('public/vendor/jquery/jquery.js') ?>"></script>
  <script src="<?= base_url('public/vendor/bootstrap/js/bootstrap.bundle.js') ?>"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <a class="navbar-brand text-right ml-5" href="#">
      <!-- <h3 class="m-0 pt-2" style="line-height: 40%">zainzo</h3>
      <small class="m-0 pb-2">.accounting</small> -->
      <img style="max-height: 25px; max-width: 25px" src="<?= base_url('public/assets/icon/zainzo_simple_logo.png') ?>">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item mx-1">
          <a class="nav-link" data-navbar-id="dashboard" href="<?= base_url('accounting/dashboard') ?>">Dashboard</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link" data-navbar-id="cash-and-bank" href="<?= base_url('finance/cash-and-bank') ?>">Kas & Bank</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link" data-navbar-id="expenses" href="<?= base_url('finance/expenses') ?>">Biaya - Biaya</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link" data-navbar-id="coa" href="<?= base_url('accounting/coa') ?>">Akun</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link" data-navbar-id="journal" href="<?= base_url('accounting/journal') ?>">Jurnal Umum</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link" data-navbar-id="ledger" href="<?= base_url('accounting/ledger') ?>">Buku Besar</a>
        </li>
        <li class="nav-item mx-1 dropdown">
          <a class="nav-link dropdown-toggle" data-navbar-id="report" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Laporan
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Jurnal Umum</a>
            <a class="dropdown-item disabled" href="#">Buku Besar</a>
            <a class="dropdown-item disabled" href="#">Arus Kas</a>
            <a class="dropdown-item disabled" href="#">Neraca</a>
            <a class="dropdown-item disabled" href="#">Neraca Keuangan</a>
            <a class="dropdown-item disabled" href="#">Laba / Rugi</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <script type="text/javascript">
    let NavbarUtils = function () {
      let data = {};

      $activeNavbar = $(`a[data-navbar-id="${'<?= $navbar['active'] ?>'}"]`);

      data.handleActive = function () {
        console.log($activeNavbar);
        $activeNavbar.attr('class', 'nav-link active');
      }

      return data;
    }
    navbarUtils = NavbarUtils();
    navbarUtils.handleActive();
  </script>
  <div class="container-fluid px-5">
    <?= $this->renderSection('content') ?>
  </div>
</body>
</html>