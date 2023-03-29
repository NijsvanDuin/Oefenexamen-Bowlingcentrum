<?php

namespace App\Controllers;

use App\Libraries\Controller;

class Result extends Controller
{
  private $personScore;

  public function __construct()
  {
    $this->personScore = $this->model('PersonScore');
  }

  public function index()
  {
    switch ($_SERVER['REQUEST_METHOD']) {
      case 'POST':

        if (isset($_POST['date']) && !empty($_POST['date']) && $_POST['date'] != 'all') {
          $this->setData([
            'title' => 'Result',
            'personScores' => $this->personScore->allByPersonDate(4, $_POST)
          ]);
        } else {
          $this->setData([
            'title' => 'Result',
            'personScores' => $this->personScore->allByPerson(4)
          ]);
        }

        $this->view('result/index');

        break;
      case 'GET':
        $this->setData([
          'title' => 'Result',
          'personScores' => $this->personScore->allByPerson(4)
        ]);

        $this->view('result/index');
        break;
    }
  }

  public function players()
  {
    $this->setData([
      'title' => 'Players',
      'personScores' => $this->personScore->all()
    ]);

    $this->view('result/players');
  }

  public function edit($person)
  {
    switch ($_SERVER['REQUEST_METHOD']) {
      case 'POST':

        if (isset($_POST['date']) && !empty($_POST['date']) && $_POST['date'] != 'all') {
          $this->setData([
            'title' => 'Result',
            'personScores' => $this->personScore->allPersonOnlyDate($person, $_POST),
            'person' => $person,
          ]);
        } else {
          $this->setData([
            'title' => 'Result',
            'personScores' => $this->personScore->allPersonOnly($person),
            'person' => $person,
          ]);
        }

        $this->view('result/edit');

        break;
      case 'GET':
        $this->setData([
          'title' => 'Result',
          'personScores' => $this->personScore->allPersonOnly($person),
          'person' => $person
        ]);

        $this->view('result/edit');
        break;
    }
  }

  public function update($id)
  {
    switch ($_SERVER['REQUEST_METHOD']) {
      case 'POST':
        $this->personScore->update($id, $_POST);

        echo "Aantal punten bijgewerkt!";

        header("refresh:2;url=/result/players");

        break;
      case 'GET':
        $this->setData([
          'title' => 'Update',
          'personScores' => $this->personScore->find($id),
          'id' => $id
        ]);

        $this->view('result/update');
        break;
    }
  }
}
