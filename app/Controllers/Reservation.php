<?php

namespace App\Controllers;

use App\Libraries\Controller;

class Reservation extends Controller
{
  private $reservationModel;
  private $personModel;
  private $trackModel;
  private $openingModel;

  public function __construct()
  {
    $this->reservationModel = $this->model('ReservationModel');
    $this->personModel = $this->model('PersonModel');
    $this->trackModel = $this->model('TrackModel');
    $this->openingModel = $this->model('OpeningModel');
  }

  public function index()
  {
    $this->setData([
      'title' => 'Reservation',
      'reservations' => $this->reservationModel->all(),
    ]);

    $this->view('reservation/index');
  }

  public function create()
  {
    switch ($_SERVER['REQUEST_METHOD']) {
      case 'GET':
        $this->setData([
          'title' => 'Create Reservation',
          'persons' => $this->personModel->all(),
          'tracks' => $this->trackModel->all(),
          'openings' => $this->openingModel->all(),
        ]);

        $this->view('reservation/create');
        break;

      case 'POST':

        $this->reservationModel->create($_POST);

        header('Location: ' . $_ENV['URL_ROOT'] . '/reservation');
        break;
    }
  }

  public function edit($id)
  {
    switch ($_SERVER['REQUEST_METHOD']) {
      case 'GET':
        $this->setData([
          'title' => 'Update Reservation',
          'reservation' => $this->reservationModel->find($id),
          'persons' => $this->personModel->all(),
          'tracks' => $this->trackModel->all(),
          'openings' => $this->openingModel->all(),
        ]);

        $this->view('reservation/edit');
        break;

      case 'POST':
        $_POST['is_active'] = isset($_POST['is_active']) ? 1 : 0;

        $this->reservationModel->update($id, $_POST);

        header('Location: ' . $_ENV['URL_ROOT'] . '/reservation');
        break;
    }
  }

  public function delete($id)
  {
    $this->reservationModel->delete($id);

    header('Location: ' . $_ENV['URL_ROOT'] . '/reservation');
  }
}
