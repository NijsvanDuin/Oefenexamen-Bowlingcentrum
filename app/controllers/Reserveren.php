<?php
class Reserveren extends Controller
{
    // Properties
    private $reserveerModel;
    private $message;

    // De constructor voor het aanmaken van een modelobject
    public function __construct()
    {
        $this->reserveerModel = $this->model('Reserveer');
    }

    // De default method
    public function index()
    {
        $records = $this->reserveerModel->getGereedschap();

        // De data die naar de view moet worden gestuurd
        $data = [
            'title' => 'Reserveren van de buurtschuur',
            'records' => $records,
        ];

        // Laad de view
        $this->view('reserveren/index', $data);
    }
}
