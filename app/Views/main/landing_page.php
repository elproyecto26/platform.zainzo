<?= $this->extend('main/layout/landing_layout') ?>

<?= $this->section('content') ?>
<div class="row row-card mt-3 px-5">
  <div class="col">
    <div class="row mt-5"></div>
    <div class="row mt-5">
      <div class="col-12 col-lg-6 text-right">
        <h1 class="display-4 mt-3" style="line-height: 60%">Selamat Datang di</h1>
        <h1 class="display-4 mt-3" style="line-height: 60%">Zainzo<span class="text-primary">Cloud</span></h1>
      </div>
      <div class="col-12 col-lg-6 text-left">
        <h3 class="mt-3">Kembangkan bisnis anda. Zainzo ada untuk membantu operasional bisnis anda.</h3>
        <a class="text-left" href="#">Pelajari Lebih Lanjut -></a>
      </div>
    </div>
    <div class="row mt-5 justify-content-center">
      <div class="col text-center">
        <div class="row justify-content-center align-items-center">
          <a href="<?= base_url('register') ?>" class="btn btn-lg btn-primary mr-5">Daftar Akun Zainzo</a>
          <h5>atau</h5>
          <a href="<?= base_url('login') ?>" class="btn btn-lg btn-success ml-5">Login Sekarang</a>
        </div>
      </div>
    </div>
    <div class="row mt-5">
    </div>
    <div class="row mt-5">
      <div class="col">
        <h1 class="text-center"><span class="text-danger">Solusi-solusi</span> untuk <span class="text-success">bisnis anda</span>:</h1>
      </div>
    </div>
    <div class="row row-card">
      <div class="col-3 mt-4 d-flex align-items-stretch">
        <div class="card bg-shady-purple color-purple shadow-sm">
          <div class="card-body">
            <div class="text-right">
              <h1 class="mt-2" style="line-height: 40%">zainzo</h1>
              <p>.accounting</p>
            </div>
            <p>Aplikasi Pembukuan Online sederhana untuk perkembangan bisnis anda.</p>
            <a href="#">Kunjungi -></a>
          </div>
        </div>            
      </div>
      <div class="col-3 mt-4 d-flex align-items-stretch">
        <div class="card bg-shady-blue color-blue shadow-sm">
          <div class="card-body">
            <div class="text-right">
              <h1 class="mt-2" style="line-height: 40%">zainzo</h1>
              <p>.platform</p>
            </div>
            <p>Hubungkan karyawan bisnis anda dengan sosial media yang didesain untuk internal bisnis anda</p>
            <a href="#" class="disabled">Kunjungi -></a>
          </div>
        </div>
      </div>
      <div class="col-3 mt-4 d-flex align-items-stretch">
        <div class="card bg-shady-gray color-gray shadow-sm">
          <div class="card-body">
            <div class="text-right">
              <h1 class="mt-2" style="line-height: 40%">zainzo</h1>
              <p>.pos</p>
            </div>
            <p>Percepat transaksi-transaksi penjualan anda hingga ke seluruh cabang bisnis anda.</p>
            <p>Coming soon</p>
          </div>
        </div>
      </div>
      <div class="col-3 mt-4 d-flex align-items-stretch">
        <div class="card bg-shady-gray color-gray shadow-sm">
          <div class="card-body">
            <div class="text-right">
              <h1 class="mt-2" style="line-height: 40%">zainzo</h1>
              <p>.purchasing</p>
            </div>
            <p>Tingkatkan skala suplai bisnis anda ke level selanjutnya.</p>
            <p>Coming soon</p>
          </div>
        </div>
      </div>
      <div class="col-3 mt-4 d-flex align-items-stretch">
        <div class="card bg-shady-gray color-gray shadow-sm">
          <div class="card-body">
            <div class="text-right">
              <h1 class="mt-2" style="line-height: 40%">zainzo</h1>
              <p>.inventory</p>
            </div>
            <p>Mutasi, Opname, Transfer Satuan, semua urusan inventarisasi ada disini.</p>
            <p>Coming soon</p>
          </div>
        </div>
      </div>
      <div class="col-3 mt-4 d-flex align-items-stretch">
        <div class="card bg-shady-gray color-gray shadow-sm">
          <div class="card-body">
            <div class="text-right">
              <h1 class="mt-2" style="line-height: 40%">zainzo</h1>
              <p>.hrd</p>
            </div>
            <p>Kendalikan biaya, dan tingkatkan kualitas pengelolaan Sumber Daya Manusia bisnis anda.</p>
            <p>Coming soon</p>
          </div>
        </div>
      </div>
      <div class="col-3 mt-4 d-flex align-items-stretch">
        <div class="card bg-shady-gray color-gray shadow-sm">
          <div class="card-body">
            <div class="text-right">
              <h1 class="mt-2" style="line-height: 40%">zainzo</h1>
              <p>.factory</p>
            </div>
            <p>Tidak perlu bingung lagi dengan kontrol produksi bisnis anda.</p>
            <p>Coming soon</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
    </div>
  </div>
</div>
<?= $this->endSection('content') ?>