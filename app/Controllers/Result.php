<?php

namespace App\Controllers;

use App\Libraries\Controller;

class Result extends Controller
{
  private $personScore;

  public function __construct()
  {
    require_once '../app/Models/PersonScore.php';
    $this->personScore = new \App\Models\PersonScore();
  }

  public function index()
  {
    $sessions = $this->personScore->getSessionsByPerson(4);
    $selected = $sessions[0]->id;

    switch ($_SERVER['REQUEST_METHOD']) {
      case 'POST':
        $this->setData([
          'title' => 'Resultaten',
          'scores' => $this->personScore->getSessionScore($selected),
          'sessions' => $sessions,
          'selected' => empty($_POST['session']) ? $sessions[0]->id : (int) $_POST['session'],
        ]);

        $this->view('result/index');
        break;
      case 'GET':
        $this->setData([
          'title' => 'Resultaten',
          'scores' => $this->personScore->getSessionScore($selected),
          'sessions' => $sessions,
          'selected' => $selected,
        ]);

        $this->view('result/index');
        break;
    }
  }
}
