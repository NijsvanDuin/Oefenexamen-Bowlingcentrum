<?php

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class ReservationTest extends TestCase
{
  public function testReservation()
  {
    $reservation = new Reservation();
    $output = $reservation->getReservation();
    $this->assertEquals('Reservation', $output);
  }
}
