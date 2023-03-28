<?php
class Reservation extends Controller
{
  private $reservationModel;

  public function __construct()
  {
    $this->reservationModel = $this->model('ReservationModel');
  }

  public function index()
  {
    $reservations = $this->reservationModel->getReservations();

    $data = [
      'title' => 'Reservation',
      'reservations' => $reservations
    ];

    $this->view('reservation/index', $data);
  }

  public function edit($id)
  {
    $reservation = $this->reservationModel->getReservationById($id);

    $data = [
      'title' => 'Edit reservation',
      'id' => $id,
      'reservation' => $reservation
    ];

    $this->view('reservation/edit', $data);
  }
}
