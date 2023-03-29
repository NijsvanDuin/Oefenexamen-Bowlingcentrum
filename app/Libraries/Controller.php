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
}
