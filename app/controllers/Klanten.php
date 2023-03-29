<?php

class Klanten extends Controller
{
    private $klantModel;
    public function __construct()
    {
        $this->klantModel = $this->model('Klant');
    }
    public function index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {
                $datums = $_POST["datum"] . " " . $_POST["tijd"];
                $klanten = $this->klantModel->getKlantenDatum($datums);
                if (empty($klanten)) {
                    $mes = "<hr><h3>Er is geen infomatie beschikbaar voor deze geselecteerde datum.</h3>";
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        } else {
            try {
                $klanten = $this->klantModel->getKlanten();
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        $data = [
            'title' => '<h1>Overzicht Klanten</h1>',
            'klanten' => $klanten,
            'mes' => $mes ?? ''
        ];
        $this->view('klanten/index', $data);
    }
}
