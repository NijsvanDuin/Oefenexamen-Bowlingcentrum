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
        // Haalt informatie op van de gebruiker
        $resultSingle = $this->contactModel->getContactById();
        $name = '';
        // var_dump($resultSingle);
        foreach ($resultSingle as $value) {
            $name .= "$value->name";
        }
        // checkt of de gebruiker rechten heeft om de contactgegevens van alle users te bekijken
        if ($name == 'admin') {
            $result = $this->contactModel->getContactInfo();

            var_dump($result);
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
                                <td><a href='" . URLROOT . "/ContactController/update/$value->id'>update</a></td>
                                <td><a href='" . URLROOT . "/contactController/delete/$value->id'>delete</a></td>
                              </tr>";
            }
            $data = [
                'title' => "Contactgegevens",
                // 'userId' => $userId,
                'rows' => $rows,
                'value' => $result,
                'name' => $name,
            ];
        } else {
            // als de gebruiker geen admin is dan kan de gebruiker alleen zijn eigen contactgegevens zien
            $result = $this->contactModel->getContactById();
            $rows = '';
            foreach ($result as $value) {
                $rows .= "<tr>
                                <td>$value->first_name</td>
                                <td>$value->last_name</td>
                                <td>$value->email</td>
                                <td>$value->phone</td>
                                <td>$value->created_at</td>
                                <td>$value->updated_at</td>
                                <td><a href='" . URLROOT . "/contact/update/$value->userId'>update</a></td>
                                <td><a href='" . URLROOT . "/contact/delete/$value->userId'>delete</a></td>
                              </tr>";
            }
            $data = [
                'title' => "Contactgegevens",
                'rows' => $rows,
            ];
        }
        $this->view('Contact/index', $data);
    }

    public function update($id)
    {
        $row = $this->contactModel->getContactById($id);
        var_dump($row);
        $personId = '';
        $naam = '';
        foreach ($row as $value) {
            $naam .= "$value->first_name" . " " . "$value->last_name";
            $personId .= "$value->personId";
        }
        var_dump($naam);

        $data = [
            'title' => 'Contactgegevens updaten',
            'naam' => $naam,
            'personId' => $personId
        ];
        $this->view('Contact/updatecontact', $data);
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
