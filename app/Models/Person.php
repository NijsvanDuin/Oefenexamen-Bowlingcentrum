<?php

namespace App\Models;

use App\Libraries\Database;
use PDO;

class Person
{
  private Database $db;

  public function __construct()
  {
    $this->db = new Database($_ENV['DB_HOST'], $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS']);
  }

  public function getPersons(): array
  {
    $this->db->query("SELECT * FROM person ORDER BY last_name ASC");
    return $this->db->resultSet();
  }
}
