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

    public function reservations()
    {
        $result = $this->reservationModel->getReservations2();
        // var_dump($result);
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

    public function update($trackId)
    {
        // var_dump($_POST);
        $_SERVER["REQUEST_METHOD"] == "POST";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            try {

                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                // $this->reservationModel->updateTrack($_POST, $reservationId);
                $this->reservationModel->updateTrack($_POST, $trackId);
                echo "Het baannummer is gewijzigd";
                header("Refresh:3; " . URLROOT . "/reservations/reservations");
            } catch (PDOException $e) {
                echo "Deze baan is ongeschikt voor kinderen omdat deze geen hekjes heeft" . $e;
                exit;
                header("Refresh:3; url=" . URLROOT . "/reservations/reservations");
            }
        } else {
            $track = $this->reservationModel->getTracks();
            $current = $this->reservationModel->getSingleTrack($trackId);
            // var_dump($track);

            foreach ($track as $value) {
                $id = $value->trackId;
            };
            // var_dump($id);
            $data = [
                'title' => 'Details Baannummer',
                'id' => $trackId,
                'track' => $track,
                'current' => $current,
                'code' => $id,
            ];
            $this->view('reservations/update', $data);
        }
    }
}
