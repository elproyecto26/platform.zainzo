<?php

namespace App\Controllers;

class CodeIgniter extends BaseController
{
  public function index()
  {
    return view('codeigniter/welcome_message');
  }
}