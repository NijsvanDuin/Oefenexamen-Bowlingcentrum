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

  public function create()
  {
    switch ($_SERVER['REQUEST_METHOD']) {
      case 'GET':
        $options = $this->reservationModel->getOptions();

        $data = [
          'title' => 'Create reservation',
          'options' => $options,
        ];

        $this->view('reservation/create', $data);
        break;
      case 'POST':
        if (isset($_POST['is_active']) && $_POST['is_active'] === 'on') {
          $_POST['is_active'] = 1;
        } else {
          $_POST['is_active'] = 0;
        }

        $reservation = [
          'person_id' => 1,
          'track_id' => 1,
          'opening_id' => 1,
          'adults' => $_POST['adults'],
          'children' => $_POST['children'],
          'date_reservation' => $_POST['date_reservation'],
          'time_reservation' => $_POST['time_reservation'],
          'is_active' => $_POST['is_active']
        ];

        try {
          $this->reservationModel->postReservation($reservation);
          header('Location: ' . URLROOT . '/reservation');
        } catch (Exception $e) {
          $data = [
            'title' => 'Create reservation',
            'reservation' => $reservation,
            'error' => $e
          ];
          $this->view('reservation/create', $data);
        }
        break;
    }
  }

  public function edit($id)
  {
    switch ($_SERVER['REQUEST_METHOD']) {
      case 'GET':
        $reservation = $this->reservationModel->getReservationById($id);

        $data = [
          'title' => 'Edit reservation',
          'reservation' => $reservation
        ];

        $this->view('reservation/edit', $data);
        break;
      case 'POST':
        if (isset($_POST['is_active']) && $_POST['is_active'] === 'on') {
          $_POST['is_active'] = 1;
        } else {
          $_POST['is_active'] = 0;
        }

        $reservation = [
          'id' => $id,
          'adults' => $_POST['adults'],
          'children' => $_POST['children'],
          'date_reservation' => $_POST['date_reservation'],
          'time_reservation' => $_POST['time_reservation'],
          'is_active' => $_POST['is_active']
        ];

        try {
          $this->reservationModel->putReservation($reservation);
          header('Location: ' . URLROOT . '/reservation');
        } catch (Exception $e) {
          $data = [
            'title' => 'Edit reservation',
            'reservation' => $reservation,
            'error' => $e
          ];
          $this->view('reservation/edit', $data);
        }
        break;
    }
  }

  public function delete($id)
  {
    $this->reservationModel->deleteReservation($id);
    header('Location: ' . URLROOT . '/reservation');
  }

  public function getReservation()
  {
    return 'Reservation';
  }
}
