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
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {
                $date = $_POST["Date"];
                $Reservation = $this->reservationModel->getDate($date);
                if (empty($Reservation)) {
                    $mes = "<hr><h3>Er zijn geen reservaties na deze datum</h3>";
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        } else {
            try {
                $Reservation = $this->reservationModel->getReservation();
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }

        $rows = '';
        foreach ($Reservation as $value) {
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
            'Reservation' => $Reservation,
            'mes' => $mes ?? '',
            'rows' => $rows
        ];
        $this->view('/reservation/index', $data);
    }
}
