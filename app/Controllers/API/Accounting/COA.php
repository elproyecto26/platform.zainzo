<?php

namespace App\Controllers\API\Accounting;

use App\Controllers\BaseResourceController;

class COA extends BaseResourceController
{
  public function get()
  {
    $data = [
      'coaTypeID' => $this->request->getGet('coa-type-id') ?? null
    ];

    $coaModel = model('App\Models\Mst\Acc\COA');

    $this->setData($coaModel->get($data));
    return $this->send();
  }

  public function post()
  {
    $coaModel = model('App\Models\Mst\Acc\COA');

    $this->setData([
      'coa_type_id' => $this->request->getPost('coaTypeID'),
      'coa_code' => $this->request->getPost('coaCode'),
      'coa_name' => $this->request->getPost('coaName'),
      'coa_parent_id' => $this->request->getPost('coaParentID'),
      'is_transaction' => $this->request->getPost('isTransaction'),
      'default_d_c' => $this->request->getPost('defaultDC')
    ]);
    $this->send();

    $rowCount = $coaModel->insert([
      'coa_type_id' => $this->request->getPost('coaTypeID'),
      'coa_code' => $this->request->getPost('coaCode'),
      'coa_name' => $this->request->getPost('coaName'),
      'coa_parent_id' => $this->request->getPost('coaParentID'),
      'is_transaction' => $this->request->getPost('isTransaction'),
      'default_d_c' => $this->request->getPost('defaultDC'),
      'is_master' => 0
    ]);

    $this->setData(['insert' => $rowCount > 0 ? 'success' : 'failed']);
    return $this->send();
  }
}