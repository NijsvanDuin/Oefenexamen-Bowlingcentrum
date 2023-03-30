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
          if (!isset($_POST['value'])) {
            throw new \Exception('Geen score ingevuld');
          }

          if (!is_numeric($_POST['value'])) {
            throw new \Exception('Score moet een getal zijn');
          }

          if ($_POST['value'] < 0 || $_POST['value'] > 300) {
            throw new \Exception('Score moet tussen de 0 en 300 liggen');
          }

          $this->personScore->updateScore($id, $_POST['value']);

          $this->setData([
            'title' => 'Resultaten',
            'msg' => [
              'title' => 'Succes',
              'body' => 'Score is aangepast',
            ],
          ]);

          $this->view('layouts/messages/base');

          header('refresh: 1; url=' . $_ENV['URL_ROOT'] . '/persons/persons');
        } catch (\Exception $e) {
          $this->setData([
            'title' => 'Resultaten',
            'msg' => [
              'title' => 'Fout',
              'body' => $e->getMessage(),
            ],
          ]);

          $this->view('layouts/messages/base');

          header('refresh: 1; url=' . $_ENV['URL_ROOT'] . '/persons/persons');
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
