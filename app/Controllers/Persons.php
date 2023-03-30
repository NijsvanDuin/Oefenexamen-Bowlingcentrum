<?php

namespace App\Controllers;

use App\Libraries\BaseController;

class Persons extends BaseController
{
  private $personScore;
  private $person;

  public function __construct()
  {
    require_once '../app/Models/Person.php';
    require_once '../app/Models/PersonScore.php';
    $this->personScore = new \App\Models\PersonScore();
    $this->person = new \App\Models\Person();
  }

  public function index()
  {
    $this->setData([
      'title' => 'Resultaten',
      'persons' => $this->person->getPersons(),
    ]);

    $this->view('persons/index');
  }

  public function detail($id)
  {
    $this->setData([
      'title' => 'Resultaten',
      'scores' => $this->personScore->getScoresByPerson($id),
    ]);

    $this->view('persons/detail');
  }

  public function edit($id)
  {
    switch ($_SERVER['REQUEST_METHOD']) {
      case 'POST':
        try {
          $this->personScore->updateScore($id, $_POST['value']);

          echo "<span>Score is aangepast</span>";

          header('refresh: 1; url=' . $_ENV['URL_ROOT'] . '/persons/persons');
        } catch (\Exception $e) {
          echo "<span>Er is iets fout gegaan</span>";
        }

        break;
      case 'GET':
        $this->setData([
          'title' => 'Resultaten',
          'score' => $this->personScore->getScoresById($id),
        ]);

        $this->view('persons/edit');
        break;
    }
  }
}
