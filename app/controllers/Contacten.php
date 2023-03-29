<?php

class Contacten extends Controller
{
    private $contactModel;

    public function __construct()
    {
        $this->contactModel = $this->model('Contact');
    }

    public function index()
    {
        try {
            $contacten = $this->contactModel->getContacten();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        $data = [
            'title' => '<h1>Overzicht Klanten</h1>',
            'contacten' => $contacten
        ];
        $this->view('contacten/index', $data);
    }

    public function update($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $this->contactModel->updateEmail($_POST);
                echo "<h2>Email is succesvol geupdate!</h2>";
                header("Refresh:3; url=" . URLROOT . "/contacten/index");
            } else {
                echo "<h2>Email address is niet geldig. Voer een geldig email adres in.</h2>";
                header("Refresh:3; url=" . URLROOT . "/contacten/update/$id");
            }
        } else {
            $row = $this->contactModel->getContactById($id);
            $data = [
                'title' => '<h1>Klant Details</h1>',
                'row' => $row,
                'id' => $id
            ];
            $this->view("contacten/update", $data);
        }
    }
}
