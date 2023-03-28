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
                                <td>$value->first_name</td>
                                <td>$value->last_name</td>
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

    public function update($id)
    {
        $info = $this->contactModel->getContactById($id);
        $personId = '';
        $naam = '';
        if (!$info) {
            foreach ($info as $value) {
                $naam .= "$value->first_name" . " " . "$value->last_name";
                $personId .= "$value->person_id";
            }
        }

        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                $info = $this->contactModel->getContactById($id);

                $data = [
                    'title' => 'Contactgegevens updaten',
                    'person_id' => $id

                ];

                $this->view('Contact/updatecontact', $data);
                break;
            case 'POST':
                $updatedInfo = [
                    'person_id' => $id,
                    'first_name' => $_POST['first_name'],
                    'last_name' => $_POST['last_name'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                ];

                try {
                    $this->contactModel->putReservation($updatedInfo);
                    header('Location: ' . URLROOT . '/Contact/index');
                } catch (Exception $e) {
                    $data = [
                        'title' => 'Edit reservation',
                        'error' => $e,
                        'person_id' => $id
                    ];
                    $this->view('contact/updatecontact', $data);
                }
                break;
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
