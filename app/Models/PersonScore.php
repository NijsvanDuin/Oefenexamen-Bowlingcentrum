<?php

namespace App\Models;

use App\Libraries\Database;
use PDO;

class PersonScore
{
  private Database $db;

  public function __construct()
  {
    $this->db = new Database($_ENV['DB_HOST'], $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS']);
  }

  public function getSessionScore(int $sessionId): array
  {
    $this->db->query("SELECT
                          person.first_name,
                          person.insertion,
                          person.last_name,
                          score.value,
                          score.created_at
                      FROM
                          person_score
                      INNER JOIN 
                          person ON person_score.person_id = person.id
                      INNER JOIN 
                          score ON person_score.score_id = score.id
                      WHERE
                          person_score.reservation_id = :sessionId
                      ORDER BY
                          score.value 
                      DESC");
    $this->db->bind(':sessionId', $sessionId);
    return $this->db->resultSet();
  }

  public function getSessionsByPerson(int $personId): array
  {
    $this->db->query("SELECT reservation.id, reservation.date FROM reservation WHERE reservation.person_id = :personId ORDER BY reservation.date DESC");
    $this->db->bind(':personId', $personId);
    return $this->db->resultSet();
  }

  public function getScoresByPerson(int $personId): array
  {
    $this->db->query("SELECT
                          score.id,
                          score.value,
                          score.created_at
                      FROM
                          person_score
                      INNER JOIN 
                          score ON person_score.score_id = score.id
                      WHERE
                          person_score.person_id = :personId
                      ORDER BY
                          score.value 
                      DESC");
    $this->db->bind(':personId', $personId);
    return $this->db->resultSet();
  }

  public function getScoresById(int $id): object
  {
    $this->db->query("SELECT
                          score.id,
                          score.value,
                          score.created_at
                      FROM 
                          score 
                      WHERE
                          id = :id");
    $this->db->bind(':id', $id);
    return $this->db->single();
  }

  public function updateScore(int $id, int $value): void
  {
    $this->db->query("UPDATE score SET value = :value WHERE id = :id");
    $this->db->bind(':id', $id);
    $this->db->bind(':value', $value);
    $this->db->execute();
  }
}
