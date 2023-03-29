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
        $reserveringen = $this->reservationModel->getReservation();

        $rows = '';
        foreach ($reserveringen as $value) {
            $rows .= "<tr>
                        <td>$value->first_name</td>
                        <td>$value->date_reservation</td>
                        <td>$value->PlayTime</td>
                        <td>$value->start_time</td>
                        <td>$value->end_time</td>
                        <td>$value->adults</td>
                        <td>$value->children</td>
                    </tr>";
        }

        $data = [
            'title' => 'Reserveringen',
            'reservationCustomer' => 'John',
            'rows' => $rows
        ];
        $this->view('/reservation/index', $data);
    }
}
