<?php

namespace App\Controllers\API\Accounting;

use App\Controllers\BaseResourceController;

class COAType extends BaseResourceController
{
  public function get()
  {
    $data = [
      'coaTypeID' => $this->request->getGet('coa-type-id') ?? null
    ];

    $coaTypeModel = model('App\Models\Mst\Acc\COAType');

    $this->setData($coaTypeModel->get($data));
    return $this->send();
  }
}