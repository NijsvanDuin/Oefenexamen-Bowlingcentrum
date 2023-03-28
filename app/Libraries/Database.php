<?php

namespace App\Libraries;

use PDO;
use PDOException;
// put the consturctor parameters in the class definition
/**
 * Class Database
 * @package App\Libraries
 * @property PDO $dbHandler
 * @property PDOStatement $statement
 * @property string $host
 * @property string $dbName
 * @property string $user
 * @property string $password
 */
class Database
{
  private PDO $dbHandler;

  public function __construct(
    private string $host,
    private string $dbName,
    private string $user,
    private string $password,
  ) {
    $this->connect();
  }

  private function connect(): void
  {
    $dsn = "mysql:host=$this->host;dbname=$this->dbName;charset=utf8mb4";
    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
      PDO::ATTR_EMULATE_PREPARES => false,
    ];
    $this->dbHandler = new PDO($dsn, $this->user, $this->password, $options);
  }

  public function query(string $sql): void
  {
    $this->statement = $this->dbHandler->prepare($sql);
  }

  public function bind(string $parameter, mixed $value, ?int $type = null): void
  {
    $type ??= match (true) {
      is_int($value) => PDO::PARAM_INT,
      is_bool($value) => PDO::PARAM_BOOL,
      is_null($value) => PDO::PARAM_NULL,
      default => PDO::PARAM_STR,
    };
    $this->statement->bindValue($parameter, $value, $type);
  }

  public function execute(): bool
  {
    return $this->statement->execute();
  }

  public function resultSet(): array
  {
    $this->execute();
    return $this->statement->fetchAll();
  }

  public function single(): object|false
  {
    $this->execute();
    return $this->statement->fetch();
  }

  public function rowCount(): int
  {
    return $this->statement->rowCount();
  }
}
