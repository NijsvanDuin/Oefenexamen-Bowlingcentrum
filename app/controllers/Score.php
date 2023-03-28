<?php
class Score extends Controller
{
    private $scoreModel;

    public function __construct()
    {
        $this->scoreModel = $this->model('ScoreModel');
    }

    public function index()
    {
        $scores = $this->scoreModel->getScore();

        $rows = '';
        foreach ($scores as $value) {
            $rows .= "<tr>
                      <td>$value->firstname</td>
                      <td>$value->lastname</td>
                      <td>$value->scorevalue</td>
                      <td><a href='deleteScore'>Delete</a><td>
                    </tr>";
        }

        $data = [
            'title' => 'Bowling Scores',

            'rows' => $rows
        ];
        $this->view('/scores/index', $data);
    }

    public function addScores($Id = null)
    {
        $options = $this->scoreModel->getPerson();

        $data = [
            'title' => 'Create reservation',
            'options' => $options,
        ];

        $this->view('scores/createScore', $data);
    }

    public function deleteScore($id)
    {
        $this->scoreModel->deleteScores($id);

        $data = [
            'deleteStatus' => "Het record met id = $id is verwijdert"
        ];
        $this->view("scores/index", $data);
        header("Refresh:3; url=" . URLROOT . "/scores/index");
    }
}