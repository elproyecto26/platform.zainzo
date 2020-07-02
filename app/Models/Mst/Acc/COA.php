<?php

namespace App\Models\Mst\Acc;

use App\Models\BaseModel;

class COA extends BaseModel
{
  protected $table = 'mst_acc_coa';
  protected $primaryKey = 'coa_id';
  protected $allowedFields = [
    'coa_type_id',
    'coa_code', 
    'coa_name',
    'coa_parent_id',
    'is_transaction',
    'default_d_c',
    'is_master'
  ];

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
        mst_acc_coa
      LEFT JOIN mst_acc_coa_type USING(coa_type_id)
      {$extSql}
      ORDER BY coa_code ASC
    ";

    $query = $this->db->query($sql, $binder);

    return $query->getResultArray();
  }
}