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
        try {
            $bestellingen = $this->bestelModel->getBestellingen();
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        $data = [
            'title' => '<h1>Order Overzicht</h1>',
            'bestellingen' => $bestellingen
        ];
        $this->view('bestelling/index', $data);
    }
    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // var_dump($_POST);
            try {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $this->bestelModel->createBestellingen($_POST);
                echo "<h2>De bestelling is sucsessful gemaakt!</h2>";
                header("Refresh:3; url=" . URLROOT . "/bestellen/index");
            } catch (PDOException $e) {
                echo "Het is niet gelukt om de bestelling te maken. Probeer het later opnieuw.";
                var_dump($_POST);
                exit;
                header("Refresh:3; url=" . URLROOT . "/bestellen/index");
            }
        } else {
            $options = $this->bestelModel->getOptions();
            $data = [
                'title' => "<h1>Nieuwe Bestelling</h1>",
                'options' => $options,
            ];

            $this->view("bestelling/create", $data);
        }
    }
    public function delete($resId, $optId)
    {
        try {
            $this->bestelModel->deleteBestelling($resId, $optId);
            echo "<h2>De bestelling is sucsessful verwijderd!</h2>";
            header("Refresh:3; url=" . URLROOT . "/bestellen/index");
        } catch (PDOException $e) {
            echo "Het is niet gelukt om de bestelling te verwijderen. Probeer het later opnieuw.";
            var_dump($_POST);
            exit;
            header("Refresh:3; url=" . URLROOT . "/bestellen/index");
        }
    }
}
