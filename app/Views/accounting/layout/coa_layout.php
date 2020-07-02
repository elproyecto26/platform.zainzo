<?= $this->extend('accounting/layout/app_layout') ?>

<?= $this->section('content') ?>
<nav class="mt-3 mx-3" aria-label="breadcrumb" id="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('accounting') ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="<?= base_url('accounting/coa') ?>">Akun</a></li>
  </ol>
</nav>
<h1 class="mt-5 ml-3">Akun</h1>
<div class="row row-card mt-3 mx-1">
  <div class="col-12">
    <div class="card shadow-sm">
      <div class="card-header pb-0 px-0">
        <ul class="nav nav-tabs px-2">
          <li class="nav-item">
            <a class="nav-link text-dark" data-nav-id="index" href="<?= base_url('accounting/coa') ?>">Halaman Utama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" data-nav-id="data" href="<?= base_url('accounting/coa/data') ?>">Semua Akun</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" data-nav-id="new" href="<?= base_url('accounting/coa/new') ?>">Buat Akun Baru</a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <?= $this->renderSection('content') ?>
      </div>
    </div>
  </div>
</div>
<div class="row my-5"></div>
<script type="text/javascript">
let NavUtils = function () {
  let data = {};

  let $breadcrumb = $('nav#breadcrumb');
  let $activeNav = $(`a[data-nav-id="${'<?= $nav['active'] ?>'}"]`);

  data.handleActive = function () {
    $breadcrumb.children('ol.breadcrumb').append(`
      <li class="breadcrumb-item active">
        ${'<?= $breadcrumb ?>'}
      </li>
    `);
    $activeNav.attr('class', 'nav-link active');
  }

  return data;
}
let navUtils = NavUtils();
navUtils.handleActive();
</script>
<?= $this->endSection('content') ?>