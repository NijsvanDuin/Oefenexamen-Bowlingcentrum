<?php

namespace App\Controllers;

use App\Libraries\Controller;

class Homepages extends Controller
{
  public function index()
  {
    $this->setData([
      'title' => 'Home',
      'name' => 'John Doe',
    ]);
    $this->view('index');
  }
}
