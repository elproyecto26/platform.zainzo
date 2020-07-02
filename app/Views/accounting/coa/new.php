<?= $this->extend('accounting/layout/coa_layout') ?>

<?= $this->section('content') ?>
<h3>Buat Akun Baru</h3>
<div class="row mt-5">
  <div class="col-lg-6">
    <div id="inputCOAFormFeedback">
      
    </div>
    <form>
      <div class="form-group">
        <label for="coaTypeID">Tipe Akun</label>
        <select class="form-control" id="coaTypeID" disabled></select>
        <small id="coaTypeIDFeedback"></small>
      </div>
      <div class="form-group">
        <label for="coaParentID">Akun Induk</label>
        <select class="form-control" id="coaParentID" disabled></select>
        <small id="coaParentIDFeedback"></small>
      </div>
      <div class="form-group">
        <label for="coaCode">Kode Akun</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="coaCodePrefix"></span>
          </div>
          <input type="text" class="form-control" id="coaCode" placeholder="Kode Akun" disabled>
        </div>
        <small id="coaParentIDFeedback"></small>
      </div>
      <div class="form-group">
        <label for="coaName">Nama Akun</label>
        <input type="text" class="form-control" id="coaName" placeholder="Nama Akun" disabled>
      </div>
      <div class="form-group">
        <label for="isTransaction">Akun Transaksi</label>
        <div class="form-group my-0">
          <div class="form-check form-check-inline ml-1" id="isTransaction">
            <input class="form-check-input" type="radio" id="isTransactionTrue" name="isTransaction" value="1" disabled>
            <label class="form-check-label" for="">
              Ya
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="isTransactionFalse" name="isTransaction" value="1" disabled>
            <label class="form-check-label" for="">
              Tidak
            </label>
          </div>
        </div>
        <small class="text-muted">Pilihan ini menentukan apakah akun yang anda buat dapat digunakan dalam suatu transaksi.</small>
      </div>
      <div class="form-group">
        <label for="defaultDC">Default Debit / Kredit</label>
        <div class="form-group my-0">
          <div class="form-check form-check-inline ml-1">
            <input class="form-check-input" type="radio" id="defaultDCDebit" name="defaultDC" value="1" disabled>
            <label class="form-check-label" for="">
              Debit
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="defaultDCCredit" name="defaultDC" value="0" disabled>
            <label class="form-check-label" for="">
              Kredit
            </label>
          </div>
        </div>
        <small class="text-muted">Ini hanya bantuan, anda tetap bebas memilih sisi debit / kredit saat input transaksi atau saat entri ke Jurnal Umum.</small>
        <small class="text-muted">Bila anda memilih opsi Debit, maka saat bertransaksi, akun ini akan masuk dalam daftar akun-akun teratas saat anda akan menginput transaksi sisi Debit.</small>
      </div>
      <div class="form-group">
        <small id="inputCOAFormFeedback"></small>
      </div>
      <button type="button" class="btn btn-primary" id="inputCOA">Buat Baru</button>
    </form>
  </div>
</div>
<script type="text/javascript">
let NewCOA = function () {
  let data = {};

  let $selectCOATypeID = $('select#coaTypeID');
  let $smallCOATypeIDFeedback = $('small#coaTypeIDFeedback');
  let $selectCOAParentID = $('select#coaParentID');
  let $smallCOAParentIDFeedback = $('small#coaParentIDFeedback');
  let $spanCOACodePrefix = $('span#coaCodePrefix');
  let $inputCOACode = $('input#coaCode');
  let $smallCOACodeFeedback = $('small#coaCodeFeedback');
  let $inputCOAName = $('input#coaName');

  let $inputIsTransactionTrue = $('input#isTransactionTrue');
  let $inputIsTransactionFalse = $('input#isTransactionFalse');
  let $inputDefaultDCDebit = $('input#defaultDCDebit');
  let $inputDefaultDCCredit = $('input#defaultDCCredit');
  let $divInputCOAFormFeedback = $('div#inputCOAFormFeedback');
  let $buttonInputCOA = $('button#inputCOA');

  data.loadCOATypeID = function () {
    $.ajax({
      method: 'GET',
      url: '<?= base_url('api/accounting/coa-type') ?>',
      beforeSend: function () {
        $selectCOATypeID.empty();
        $selectCOATypeID.append(`
          <option>Memuat Tipe Akun ...</option>
        `);
        $smallCOATypeIDFeedback.empty();
      },
      success: function (response) {
        $selectCOATypeID.empty();
        $selectCOATypeID.attr('disabled', false);
        $selectCOATypeID.append(`
          <option value="0">-- Pilih Tipe Akun --</option>
        `);
        response.data.forEach(function (item, index) {
          $selectCOATypeID.append(`
            <option value="${item.coa_type_id}">${item.coa_type}</option>
          `);
        });
        $smallCOATypeIDFeedback.empty();
      },
      error: function (response) {
        $selectCOATypeID.empty();
        $selectCOATypeID.append(`
          <option>Error</option>
        `);
        $smallCOATypeIDFeedback.empty();
        $smallCOATypeIDFeedback.attr('class', 'text-danger');
        $smallCOATypeIDFeedback.append('Error saat mengambil Data Tipe Akun. Silahkan refresh.');
      }
    });
  };
  data.handleCOATypeIDOnChange = function () {
    $selectCOATypeID.on('change', function () {
      $spanCOACodePrefix.empty();
      $inputCOACode.attr('disabled', true);
      $inputCOAName.attr('disabled', true);
      $inputIsTransactionTrue.attr('disabled', true);
      $inputIsTransactionFalse.attr('disabled', true);
      $inputDefaultDCDebit.attr('disabled', true);
      $inputDefaultDCCredit.attr('disabled', true);
      if ($selectCOATypeID.val() == 0) {
        $selectCOAParentID.empty();
        $selectCOAParentID.attr('disabled', true);
        $smallCOAParentIDFeedback.empty();
        return;
      }
      $.ajax({
        method: 'GET',
        url: '<?= base_url('api/accounting/coa') ?>',
        data: {
          'coa-type-id': $selectCOATypeID.val()
        },
        beforeSend: function () {
          $selectCOAParentID.empty();
          $selectCOAParentID.attr('disabled', true);
          $selectCOAParentID.append(`
            <option>Memuat Akun ...</option>
          `);
          $smallCOAParentIDFeedback.empty();
        },
        success: function (response) {
          $selectCOAParentID.empty();
          $selectCOAParentID.attr('disabled', false);
          $selectCOAParentID.append(`
            <option value="0">-- Pilih Akun Induk --</option>
          `);
          response.data.forEach(function (item, index) {
            $selectCOAParentID.append(`
              <option value="${item.coa_id}" data-coa-code="${item.coa_code}">${item.coa_code} - ${item.coa_name}</option>
            `);
          });
          $smallCOAParentIDFeedback.empty();
        },
        error: function (response) {
          $selectCOAParentID.empty();
          $selectCOAParentID.attr('disabled', true);
          $selectCOAParentID.append(`
            <option>Error</option>
          `);
          $smallCOAParentIDFeedback.empty();
          $smallCOAParentIDFeedback.attr('class', 'text-danger');
          $smallCOAParentIDFeedback.append('Error saat mengambil Data Akun. Silahkan refresh.');
        }
      });
    });
  };
  data.handleCOAParentIDOnChange = function () {
    $selectCOAParentID.on('change', function () {
      $spanCOACodePrefix.empty();
      $spanCOACodePrefix.text($selectCOAParentID.children('option:selected').data('coa-code'));
      if ($selectCOAParentID.val() == 0) {
        $inputCOACode.attr('disabled', true);
        $inputCOAName.attr('disabled', true);
        $inputIsTransactionTrue.attr('disabled', true);
        $inputIsTransactionFalse.attr('disabled', true);
        $inputDefaultDCDebit.attr('disabled', true);
        $inputDefaultDCCredit.attr('disabled', true);
        return;
      } else {
        $inputCOACode.attr('disabled', false);
        $inputCOAName.attr('disabled', false);
        $inputIsTransactionTrue.attr('disabled', false);
        $inputIsTransactionFalse.attr('disabled', false);
        $inputDefaultDCDebit.attr('disabled', false);
        $inputDefaultDCCredit.attr('disabled', false);
      }
    });
  };
  data.handleCOACodeKeyup = function () {
    $inputCOACode.keyup(function () {
      $inputCOACode.val($inputCOACode.val().replace(/\D/,''));
    });
  };
  data.handleInputCOARequest = function () {
    $buttonInputCOA.on('click', function () {
      let formData = {
        coaTypeID: $selectCOATypeID.val(),
        coaParentID: $selectCOAParentID.val(),
        coaCode: $selectCOAParentID.children('option:selected').data('coa-code') + $inputCOACode.val(),
        coaName: $inputCOAName.val(),
        isTransaction: $('input[name="isTransaction"]:checked').val(),
        defaultDC: $('input[name="defaultDC"]:checked').val()
      };
      $.ajax({
        method: 'POST',
        url: '<?= base_url('api/accounting/coa') ?>',
        data: formData,
        beforeSend: function () {
          $divInputCOAFormFeedback.empty();
          $divInputCOAFormFeedback.append(`
            <div class="spinner-grow spinner-grow-sm text-primary mr-3" role="status">
              <span class="sr-only">Loading...</span>
            </div>
            Loading
          `);
        },
        success: function (response) {
          $selectCOATypeID.val('0');
          $selectCOAParentID.empty();
          $selectCOAParentID.attr('disabled', true);
          $spanCOACodePrefix.empty();
          $inputCOACode.val('');
          $inputCOACode.attr('disabled', true);
          $inputCOAName.val('');
          $inputCOAName.attr('disabled', true);
          $inputIsTransactionTrue.attr('disabled', true);
          $inputIsTransactionFalse.attr('disabled', true);
          $inputDefaultDCDebit.attr('disabled', true);
          $inputDefaultDCCredit.attr('disabled', true);
          $divInputCOAFormFeedback.empty();
          $divInputCOAFormFeedback.append(`
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Berhasil!</strong> Akun ${formData.coaCode} - ${formData.coaName} berhasil ditambahkan.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          `);
        },
        error: function (response) {
          $divInputCOAFormFeedback.empty();
          $divInputCOAFormFeedback.append(`
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Gagal!</strong> Akun gagal ditambahkan.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          `);
        }
      });
    });
  };

  return data;
}

newCOA = NewCOA();
newCOA.loadCOATypeID();
newCOA.handleCOATypeIDOnChange();
newCOA.handleCOAParentIDOnChange();
newCOA.handleCOACodeKeyup();
newCOA.handleInputCOARequest()
</script>
<?= $this->endSection('content') ?>