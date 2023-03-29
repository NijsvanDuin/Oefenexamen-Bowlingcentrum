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

  public function all()
  {
    // select every person that has a score/has played a game no duplicates
    $this->db->query("SELECT
    	  person.id,
        person.first_name,
        person.insertion,
        person.last_name
    FROM
        person_score
    INNER JOIN person ON person_score.person_id = person.id
    INNER JOIN reservation ON person_score.reservation_id = reservation.id
    GROUP BY person.id
    ORDER BY person.id ASC
    ");

    return $this->db->resultSet();
  }

  public function allByPerson($personId)
  {
    $this->db->query("SELECT
      `person_score`.`score_id` AS `score_id`
      ,`person`.`first_name`
      ,`person`.`insertion`
      ,`person`.`last_name`
      ,`score`.`value`
      ,`score`.`created_at` AS `score_created_at`
    FROM person_score 
    INNER JOIN person ON person_score.person_id = person.id 
    INNER JOIN score ON person_score.score_id = score.id 
    INNER JOIN reservation ON person_score.reservation_id = reservation.id
    WHERE `reservation`.`person_id` = :person_id
    ORDER BY score.value DESC
    ");

    $this->db->bind(':person_id', $personId);

    return $this->db->resultSet();
  }

  public function allPersonOnly($person)
  {
    $this->db->query("SELECT
                          `person_score`.`score_id` AS `score_id`,
                          `person`.`first_name`,
                          `person`.`insertion`,
                          `person`.`last_name`,
                          `score`.`value`,
                          `score`.`created_at` AS `score_created_at`
                      FROM
                          person_score
                      INNER JOIN person ON person_score.person_id = person.id
                      INNER JOIN score ON person_score.score_id = score.id
                      INNER JOIN reservation ON person_score.reservation_id = reservation.id
                      WHERE
                          `person`.`id` = :person_id
    ");

    $this->db->bind(':person_id', $person);

    return $this->db->resultSet();
  }

  public function allByPersonDate($person, $data)
  {
    $this->db->query("SELECT
      `person_score`.`score_id` AS `score_id`
      ,`person`.`first_name`
      ,`person`.`insertion`
      ,`person`.`last_name`
      ,`score`.`value`
      ,`score`.`created_at` AS `score_created_at`
    FROM person_score 
    INNER JOIN person ON person_score.person_id = person.id 
    INNER JOIN score ON person_score.score_id = score.id 
    INNER JOIN reservation ON person_score.reservation_id = reservation.id
    WHERE `reservation`.`person_id` = :person_id
    AND `score`.`created_at` = :date
    ORDER BY score.value DESC
    ");

    $this->db->bind(':person_id', $person);
    $this->db->bind(':date', $data['date']);

    return $this->db->resultSet();
  }

  public function allPersonOnlyDate($person, $data)
  {
    $this->db->query("SELECT
      `person_score`.`score_id` AS `score_id`
      ,`person`.`first_name`
      ,`person`.`insertion`
      ,`person`.`last_name`
      ,`score`.`value`
      ,`score`.`created_at` AS `score_created_at`
    FROM person_score 
    INNER JOIN person ON person_score.person_id = person.id 
    INNER JOIN score ON person_score.score_id = score.id 
    INNER JOIN reservation ON person_score.reservation_id = reservation.id
    WHERE `person`.`id` = :person_id
    AND `score`.`created_at` = :date
    ORDER BY score.value DESC
    ");

    $this->db->bind(':person_id', $person);
    $this->db->bind(':date', $data['date']);

    return $this->db->resultSet();
  }

  public function find($id)
  {
    $this->db->query("SELECT
      `person_score`.`person_id` AS `person_id`
      ,`person`.`first_name`
      ,`person`.`insertion`
      ,`person`.`last_name`
      ,`score`.`value`
      ,`score`.`created_at` AS `score_created_at`
    FROM person_score 
    INNER JOIN person ON person_score.person_id = person.id 
    INNER JOIN score ON person_score.score_id = score.id 
    INNER JOIN reservation ON person_score.reservation_id = reservation.id
    INNER JOIN user ON user.person_id = person.id
    WHERE `score`.`id` = :id

    ");

    $this->db->bind(':id', $id);

    return $this->db->single();
  }

  public function update($id, $data)
  {
    $this->db->query("UPDATE score SET value = :value WHERE id = :id");

    $this->db->bind(':id', $id);
    $this->db->bind(':value', $data['value']);

    return $this->db->execute();
  }
}
