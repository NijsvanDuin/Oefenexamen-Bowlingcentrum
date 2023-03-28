<?php


class ContactController extends Controller
{
    private $contactModel;

    public function __construct()
    {
        $this->contactModel = $this->model('ContactModel');
    }
    public function index()
    {

        $result = $this->contactModel->getContactInfo();

        // Zet alle opgevraagde data in $result om in html
        $rows = '';
        foreach ($result as $value) {
            $rows .= "<tr>
                                <td>$value->personName</td>
                                <td>$value->email</td>
                                <td>$value->phone</td>
                                <td>$value->created_at</td>
                                <td>$value->updated_at</td>
                                <td><a href='" . URLROOT . "/ContactController/update/$value->id' class='form_button'>update</a></td>
                                <td><a href='" . URLROOT . "/contactController/delete/$value->id' class='form_button'>delete</a></td>
                              </tr>";
        }
        $data = [
            'title' => "Contactgegevens",
            'rows' => $rows,
            'value' => $result,
        ];
        $this->view('Contact/index', $data);
    }

    // public function update($id = NULL)
    // {
    //     var_dump($id);
    //     $info = $this->contactModel->getSingleContactInfo($id);
    //     var_dump($info);
    //     $personId = '';
    //     $naam = '';
    //     if (!$info) {
    //         foreach ($info as $value) {
    //             $naam .= "$value->first_name" . " " . "$value->last_name";
    //             $personId .= "$value->person_id";
    //         }
    //     }

    //     switch ($_SERVER['REQUEST_METHOD']) {
    //         case 'GET':
    //             $info = $this->contactModel->getSingleContactInfo($id);

    //             $data = [
    //                 'title' => 'Contactgegevens updaten',
    //                 'person_id' => $id

    //             ];

    //             $this->view('Contact/updatecontact', $data);
    //             break;
    //         case 'POST':
    //             $updatedInfo = [
    //                 'person_id' => $id,
    //                 'name' => $_POST['name'],
    //                 'email' => $_POST['email'],
    //                 'phone' => $_POST['phone'],
    //             ];

    //             try {
    //                 $this->contactModel->updateContactInfo($updatedInfo);
    //                 header('Location: ' . URLROOT . '/Contact/index');
    //             } catch (Exception $e) {
    //                 $data = [
    //                     'title' => 'Contactgegevens update',
    //                     'error' => $e,
    //                     'person_id' => $id
    //                 ];
    //                 $this->view('Contact/updatecontact', $data);
    //             }
    //             break;
    //     }
    // }

    public function update($id)
    {
        var_dump($id);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // var_dump($_POST);
            try {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                $this->contactModel->updateContactInfo($id, $_POST);
                echo "<h2>De bestelling is sucsessful geupdate!</h2>";
                header("Refresh:3; url=" . URLROOT . "/contactcontroller/index");
            } catch (PDOException $e) {
                echo "Het is niet gelukt om de bestelling te maken. Probeer het later opnieuw. <br>" . $e;
                var_dump($_POST);
                exit;
                header("Refresh:3; url=" . URLROOT . "/contactcontroller/index");
            }
        } else {
            $info = $this->contactModel->getSingleContactInfo($id);
            var_dump($info);
            $data = [
                'title' => "<h1>Update contact</h1>",
                'person_id' => $id
            ];

            $this->view("contact/updatecontact", $data);
        }
    }

    public function delete($userId)
    {

        $this->contactModel->deleteContact($userId);

        $data = [
            'deleteStatus' => "Het record met id = $userId is verwijderd"
        ];

        $this->view('Contact/delete', $data);
        header("Refresh:2; url=" . URLROOT . "/Contact/index");
    }
}

