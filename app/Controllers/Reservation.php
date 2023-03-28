<?php

namespace App\Controllers;

use App\Libraries\Controller;

class Reservation extends Controller
{
  private $reservationModel;

  public function __construct()
  {
    $this->reservationModel = $this->model('ReservationModel');
  }

  public function index()
  {
    $this->setData([
      'title' => 'Reservation',
      'reservations' => $this->reservationModel->all(),
    ]);

    $this->view('reservation/index');
  }
}
