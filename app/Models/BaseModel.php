<?php

namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model
{
  protected $db;

  public function __construct()
  {
    $this->db = \Config\Database::connect();
  }

  protected function generateExtSql($container, $data, $withWhere = true)
  {
    $extSqlArr = [];
    $binder = [];
    $whereStatementExists = false;
    foreach ($container as $index => $value) {
      if ( ! is_null($data[$index])) {
        $whereStatementExists = true;
        $extSqlArr[$index] = " {$value[0]} {$value[1]} :{$index}: AND";
        $value[2] = $value[2] ?? '';
        $value[3] = $value[3] ?? '';
        $binder[$index] = "{$value[2]}{$data[$index]}{$value[3]}";
      } else {
        $extSqlArr[$index] = '';
      }
    }

    $extSql = '';
    if ($whereStatementExists) {
      $extSql .= $withWhere
        ? 'WHERE'
        : '';
      foreach ($extSqlArr as $index => $value) {
        $extSql .= '
        ' . $value;
      }
    }

    $extSql = trim($extSql);
    $latestAndIndex = strrpos($extSql, 'AND');
    $extSql = $latestAndIndex + strlen('AND') == strlen($extSql)
      ? trim(substr($extSql, 0, $latestAndIndex))
      : $extSql;

    return [
      'extSql' => $extSql,
      'binder' => $binder
    ];
  }
}