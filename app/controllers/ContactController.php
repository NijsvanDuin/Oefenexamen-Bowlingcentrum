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
            foreach ($resultSingle as $value) {
                $name .= "$value->name";
            }
            // checkt of de gebruiker rechten heeft om de contactgegevens van alle users te bekijken
            if ($name == 'admin') {
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
                                <td><a href='" . URLROOT . "/countries/update/$value->userId'>update</a></td>
                                <td><a href='" . URLROOT . "/countries/delete/$value->userId'>delete</a></td>
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
                                <td><a href='" . URLROOT . "/countries/update/$value->userId'>update</a></td>
                                <td><a href='" . URLROOT . "/countries/delete/$value->userId'>delete</a></td>
                              </tr>";
                }
                $data = [
                    'title' => "Contactgegevens",
                    'rows' => $rows,
                ];
            }
        $this->view('Contact/index', $data);
    }

    public function create($personId = 1) 
    {
        var_dump($personId);
        $data = [
            'title' => 'Contactgegevens toevoegen',
            'personId' => $personId,
        ];

;
        $_SERVER['REQUEST_METHOD'] = 'POST';
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $data = [
                'title' => 'Contactgegevens toevoegen',
                'personId' => $_POST['personId'],
            ];
        }

        $this->view('Contact/addcontact', $data);
    }

    public function update()
    {
        $this->view('Contact/updatecontact');
    }
}
