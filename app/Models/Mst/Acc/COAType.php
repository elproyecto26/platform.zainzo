<?php

namespace App\Models\Mst\Acc;

use App\Models\BaseModel;

class COAType extends BaseModel
{
  public function get($data)
  {
    $extSqlContainer = [
      'coaTypeID'      => ['coa_type_id', '=']
    ];
    $extSqlData = $this->generateExtSql($extSqlContainer, $data);
    $extSql = $extSqlData['extSql'];
    $binder = $extSqlData['binder'];
    
    $sql = "
      SELECT
        *
      FROM
        mst_acc_coa_type
      {$extSql}
    ";

    $query = $this->db->query($sql, $binder);

    return $query->getResultArray();
  }
}