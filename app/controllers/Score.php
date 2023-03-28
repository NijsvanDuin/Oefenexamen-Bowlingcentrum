<?php
class Score extends Controller
{
    private $scoreModel;

    public function __construct()
    {
        $this->$scoreModel = $this->model('ScoreModel');
    }

    public function index()
    {
        $scores = $this->$scoreModel->getScore();

        $rows = '';
        foreach ($scores as $value) {
            $rows .= "<tr>
                  <td>$value->firstname</td>
                  <td>$value->lastname</td>
                  <td>$value->scores</td>
                </tr>";
        }

        $data = [
            'title' => 'Bowling Scores',
            'rows' => $rows
        ];
        $this->view('/scores/index', $data);
    }
}
