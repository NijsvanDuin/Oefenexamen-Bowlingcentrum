<?php
class ReservationModel
{
  // Properties, fields
  private $db;
  public $helper;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function getReservations()
  {
    $query = "
    SELECT
        `reservation`.`id`,
        `reservation`.`adults`,
        `reservation`.`children`,
        `reservation`.`is_active`,
        `person`.`first_name`,
        `person`.`last_name`,
        `user`.`email`,
        `track`.`code`,
        `opening`.`day_name`,
        `opening`.`start`,
        `opening`.`end`,
        `reservation`.`created_at`,
        `reservation`.`updated_at`
    FROM
        reservation
    INNER JOIN person ON reservation.person_id = person.id
    INNER JOIN user ON user.person_id = person.id
    INNER JOIN track ON reservation.track_id = track.id
    INNER JOIN opening ON reservation.opening_id = opening.id
    ";
    $this->db->query($query);
    return $this->db->resultSet();
  }

  public function getReservationById($id)
  {
    $query = "
    SELECT
        `reservation`.`id`,
        `reservation`.`adults`,
        `reservation`.`children`,
        `reservation`.`is_active`,
        `person`.`first_name`,
        `person`.`last_name`,
        `user`.`email`,
        `track`.`code`,
        `opening`.`day_name`,
        `opening`.`start`,
        `opening`.`end`,
        `reservation`.`created_at`,
        `reservation`.`updated_at`
    FROM
        reservation
    INNER JOIN person ON reservation.person_id = person.id
    INNER JOIN user ON user.person_id = person.id
    INNER JOIN track ON reservation.track_id = track.id
    INNER JOIN opening ON reservation.opening_id = opening.id
    WHERE `reservation`.`id` = :id
    ";
    $this->db->query($query);
    $this->db->bind(":id", $id, PDO::PARAM_INT);
    return $this->db->resultSet();
  }
}
