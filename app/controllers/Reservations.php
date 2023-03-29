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
        $result = $this->reservationModel->getReservations();
        var_dump($result);
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
    public function selectDate($date)
    {
        var_dump($date);
        $resultDate = $this->reservationModel->getReservations();
        var_dump($resultDate);
        if ($date == $resultDate['date_reservation']) {
            $this->reservationModel->getReservationByDate($date);
        }
        $this->view('reservations/index');
    }
}
