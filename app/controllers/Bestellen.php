<?php

class Bestellen extends Controller
{
    // Properties, field
    private $bestelModel;

    // Dit is de constructor
    public function __construct()
    {
        $this->bestelModel = $this->model('Bestel');
    }

    public function index()
    {
        /**
         * Haal via de method getFruits() uit de model Fruit de records op
         * uit de database
         */
        $bestellingen = $this->bestelModel->getBestellingen();
        $rows = '';
        foreach ($bestellingen as $value) {
            $rows .= "<tr>
                        <td>$value->name</td>
                        <td>$value->code</td>
                        <td>$value->time_reservation</td>
                        <td><a href='" . URLROOT . "/bestellen//$value->reservation_id/$value->option_id'>update</a></td>
                        <td><a href='" . URLROOT . "/bestellen//$value->reservation_id/$value->option_id'>delete</a></td>
                      </tr>";
        }
        /**
         * Maak de inhoud voor de tbody in de view
         */

        $data = [
            'title' => '<h1>Order Overzicht</h1>',
            'bestellingen' => $rows
        ];
        $this->view('bestelling/index', $data);
    }
}
