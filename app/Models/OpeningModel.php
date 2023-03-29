<?php

namespace App\Models;

use PDO;
use App\Libraries\Database;

class OpeningModel
{
  // Properties, fields
  private $db;
  public $helper;

  public function __construct()
  {
    $this->db = new Database($_ENV['DB_HOST'], $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS']);
  }

  public function all()
  {
    $this->db->query('SELECT * FROM opening');
    return $this->db->resultSet();
  }
}