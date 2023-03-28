<?php

namespace App\Libraries;

use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

class Core
{
  protected static Environment $twig;
  protected object $currentController;
  protected string $currentMethod = 'index';
  protected array $params = [];

  public function __construct()
  {
    $this->initTwig();
    $url = $this->getURL();

    $controller = $this->getControllerName($url);
    $this->currentController = $this->loadController($controller);

    if ($this->hasMethod($url)) {
      $this->currentMethod = $url[1];
      unset($url[1]);
    }

    $this->params = $url ? array_values($url) : [];

    $this->callMethod();
  }

  protected function getURL(): array
  {
    $url = isset($_SERVER['REQUEST_URI']) ? rtrim($_SERVER['REQUEST_URI'], '/') : 'homepages/index';

    $url = filter_var($url, FILTER_SANITIZE_URL);

    $url = explode('/', $url);

    return array_slice($url, 1);
  }

  protected function getControllerName(array &$url): string
  {
    $controller = 'homepages';
    if (isset($url[0]) && file_exists('../app/Controllers/' . ucwords($url[0]) . '.php')) {
      $controller = $url[0];
      unset($url[0]);
    }
    return ucwords($controller);
  }

  protected function loadController(string $controller): object
  {
    $controllerName = '\\app\\Controllers\\' . $controller;
    require_once '../app/Controllers/' . $controller . ".php";
    return new $controllerName();
  }

  protected function hasMethod(array &$url): bool
  {
    return isset($url[1]) && method_exists($this->currentController, $url[1]);
  }

  protected function callMethod(): void
  {
    call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
  }

  protected function initTwig(): void
  {
    $loader = new FilesystemLoader('../app/views');
    self::$twig = new Environment($loader, [
      'cache' => '../storage/cache',
      'auto_reload' => true,
    ]);
  }

  public static function getTwig(): Environment
  {
    return self::$twig;
  }
}
