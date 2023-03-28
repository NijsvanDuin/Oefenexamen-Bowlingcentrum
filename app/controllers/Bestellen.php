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

        /**
         * Maak de inhoud voor de tbody in de view
         */

        $data = [
            'title' => '<h1>Order Overzicht</h1>',
            'testje' => $bestellingen
        ];
        $this->view('bestelling/index', $data);
    }
}
