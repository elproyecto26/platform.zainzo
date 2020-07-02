<?php

namespace App\Controllers\Accounting;

use App\Controllers\BaseController;

class Journal extends BaseController
{
  public function index()
  {
    return view('accounting/journal/index');
  }

  // --------------------------------------------------------

  public function data()
  {
    return view('accounting/journal/data');
  }

  // --------------------------------------------------------

  public function entry()
  {
    return view('accounting/journal/entry');
  }
}