<?= $this->extend('accounting/layout/app_layout') ?>

<?= $this->section('content') ?>
<nav class="mt-3 mx-3" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Jurnal Umum</li>
  </ol>
</nav>
<h1 class="mt-5 ml-3">Jurnal Umum</h1>
<div class="row row-card mt-3 mx-1">
  <div class="col-12">
    <ul class="nav nav-tabs border-0">
      <li class="nav-item">
        <a class="nav-link active bg-white border-white" href="<?= base_url('accounting/journal') ?>">Halaman Utama</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('accounting/journal/data') ?>">Data Jurnal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('accounting/journal/entry') ?>">Entri Jurnal</a>
      </li>
    </ul>
    <div class="card shadow-sm">
      <div class="card-body">
        
      </div>
    </div>
  </div>
</div>
<?= $this->endSection('content') ?>