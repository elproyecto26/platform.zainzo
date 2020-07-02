<?php

namespace App\Controllers\Accounting;

use App\Controllers\BaseController;

class COA extends BaseController
{
  public function index()
  {
    return view('accounting/coa/index', [
      'title' => [
        'page' => 'Akun | Zainzo Accounting'
      ],
      'navbar' => [
        'active' => 'coa'
      ],
      'nav' => [
        'active' => 'index'
      ],
      'breadcrumb' => 'Halaman Utama'
    ]);
  }

  // -----------------------------------------------------

  public function data()
  {
    return view('accounting/coa/data', [
      'title' => [
        'page' => 'Semua Akun | Zainzo Accounting'
      ],
      'navbar' => [
        'active' => 'coa'
      ],
      'nav' => [
        'active' => 'data'
      ],
      'breadcrumb' => 'Semua Akun'
    ]);
  }

  // -----------------------------------------------------

  public function new()
  {
    return view('accounting/coa/new', [
      'title' => [
        'page' => 'Buat Akun Baru | Zainzo Accounting'
      ],
      'navbar' => [
        'active' => 'coa'
      ],
      'nav' => [
        'active' => 'new'
      ],
      'breadcrumb' => 'Buat Akun Baru'
    ]);
  }
}