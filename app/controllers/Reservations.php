<?php

class Reservations extends Controller
{
    private $reservationModel;

    public function __construct()
    {

        $this->reservationModel = $this->model('Reservation');
    }

    public function index()
    {
        // Haal alle reserveringen op en loop dor alle arrays
        $result = $this->reservationModel->getReservations();
        $rows = '';
        foreach ($result as $reservation) {
            $rows .= "<tr>
                            <td>$reservation->first_name</td>
                            <td>$reservation->last_name</td>
                            <td>$reservation->nickname</td>
                            <td>$reservation->date_reservation</td>
                            <td>$reservation->hours</td>
                            <td>$reservation->adults</td>
                            <td>$reservation->children</td>
                            <td>$reservation->name</td>
                        </tr>";
        }
        $data = [
            'title' => "Overizcht reserveringen",
            'rows' => $rows,
        ];
        $this->view('reservations/index', $data);
    }

    public function reservations() {
        $result = $this->reservationModel->getReservations2();
        var_dump($result);
        $rows = '';
        foreach ($result as $reservation) {
            $rows .= "<tr>
                            <td>$reservation->first_name</td>
                            <td>$reservation->last_name</td>
                            <td>$reservation->nickname</td>
                            <td>$reservation->date_reservation</td>
                            <td>$reservation->adults</td>
                            <td>$reservation->children</td>
                            <td>$reservation->code</td>
                            <td><a href='" . URLROOT . "/reservations/update/$reservation->reservationId'>update</a></td>
                        </tr>";
        }
        $data = [
            'title' => "Overizcht reserveringen",
            'rows' => $rows,
        ];
        $this->view('reservations/reservations', $data);
    }
}
