<?= $this->extend('accounting/layout/coa_layout') ?>

<?= $this->section('content') ?>
<h3>Daftar Akun</h3>
<table class="table table-sm mt-5" id="coaData">
  <thead>
    <tr>
      <th>Kode Akun</th>
      <th>Nama Akun</th>
      <th>Tipe Akun</th>
      <th>Akun Transaksi</th>
      <th>Standar Debit / Kredit</th>
      <th>Saldo</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>
<script type="text/javascript">
let DataCOA = function () {
  let data = {};

  let $tableCOAData = $('table#coaData');

  data.loadCOAData = function () {
    $.ajax({
      method: 'GET',
      url: '<?= base_url('api/accounting/coa') ?>',
      beforeSend: function () {

      },
      success: function (response) {
        response.data.forEach(function (item, index) {
          item.is_transaction = item.is_transaction == 1 ? 'Ya' : 'Tidak';
          item.default_d_c = item.default_d_c == 1 ? 'Debit' : 'Kredit';
          if (item.coa_parent_id == null) {
            item.coa_code = `<b>${item.coa_code}</b>`;
            item.coa_name = `<b>${item.coa_name}</b>`;
            item.coa_type = `<b>${item.coa_type}</b>`;
            item.is_transaction = `<b>${item.is_transaction}</b>`;
            item.default_d_c = `<b>${item.default_d_c}</b>`;
          }
          $tableCOAData.children('tbody').append(`
            <tr>
              <td>${item.coa_code}</td>
              <td>${item.coa_name}</td>
              <td>${item.coa_type}</td>
              <td>${item.is_transaction}</td>
              <td>${item.default_d_c}</td>
              <td></td>
            </tr>
          `);
        });
      },
      error: function () {

      }
    });
  };

  return data;
}
let dataCOA = DataCOA();
dataCOA.loadCOAData();
</script>
<?= $this->endSection('content') ?>