<?php

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use App\Controllers\Homepages;

class HomepagesTest extends TestCase
{
  public function testIndex()
  {
    $homepages = new Homepages();
    $output = $homepages->index();
    $this->assertEquals('Hello world!', $output);
  }
}
