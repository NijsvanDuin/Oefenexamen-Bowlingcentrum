<?php

namespace App\Libraries;

use Twig\Environment;
use App\Libraries\Core;

class Controller
{
  protected Environment $twig;
  protected array $data = [];

  protected function view(string $template): void
  {
    $this->twig = Core::getTwig();
    if (!file_exists('../app/views/' . $template . '.twig')) die('Template not found');
    $this->twig->addGlobal('globals', [
      'urlRoot' => $_ENV['URL_ROOT']
    ]);

    echo $this->twig->render($template . '.twig', $this->data);
  }

  protected function model(string $model): object
  {
    if (!file_exists('../app/Models/' . $model . '.php')) die('Model not found');
    require_once '../app/Models/' . $model . '.php';

    $model = '\\App\\Models\\' . $model;

    return new $model();
  }

  protected function setData(array $data): void
  {
    $this->data = $data;
  }

  protected function addData(array $data): void
  {
    $this->data = array_merge($this->data, $data);
  }

  public function getData(): array
  {
    return $this->data;
  }

  protected function addGlobal(string $key, $value): void
  {
    $this->globals[$key] = $value;
  }

  protected function addGlobals(array $globals): void
  {
    $this->globals = array_merge($this->globals, $globals);
  }
}
