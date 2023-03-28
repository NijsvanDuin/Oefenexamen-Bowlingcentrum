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
        `reservation`.`date_reservation`,
        `reservation`.`time_reservation`,
        `person`.`first_name`,
        `person`.`last_name`,
        `user`.`email`,
        `track`.`code`,
        `opening`.`day_name`,
        `opening`.`start`,
        `opening`.`end`,
        `reservation`.`is_active`,
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
      `reservation`.`date_reservation`,
      `reservation`.`time_reservation`,
      `reservation`.`is_active`,
      `reservation`.`created_at`,
      `reservation`.`updated_at`
    FROM
        reservation
    WHERE `reservation`.`id` = :id
    ";
    $this->db->query($query);
    $this->db->bind(":id", $id, PDO::PARAM_INT);
    return $this->db->single();
  }

  public function putReservation($reservation)
  {
    $query = "
    UPDATE 
      `reservation`
    SET    
      `adults` = :adults,
      `children` = :children,
      `date_reservation` = :date_reservation,
      `time_reservation` = :time_reservation,
      `is_active` = :is_active
    where
      `id` = :id
    ";

    $this->db->query($query);

    $this->db->bind(":adults", $reservation['adults'], PDO::PARAM_INT);
    $this->db->bind(":children", $reservation['chil dren'], PDO::PARAM_INT);
    $this->db->bind(":is_active", $reservation['is_active'], PDO::PARAM_INT);
    $this->db->bind(":date_reservation", $reservation['date_reservation'], PDO::PARAM_STR);
    $this->db->bind(":time_reservation", $reservation['time_reservation'], PDO::PARAM_STR);
    $this->db->bind(":id", $reservation['id'], PDO::PARAM_INT);

    return $this->db->execute();
  }

  public function postReservation($data)
  {
    $query = "
    INSERT INTO `reservation`(
      `person_id`,
      `track_id`,
      `opening_id`,
      `date_reservation`,
      `time_reservation`,
      `adults`,
      `children`,
    )
    VALUES(
      :person_id,
      :track_id,
      :opening_id,
      :date_reservation,
      :time_reservation,
      :adults,
      :children,
    )";

    $this->db->query($query);

    $this->db->bind(":person_id", $data['person_id'], PDO::PARAM_INT);
    $this->db->bind(":track_id", $data['track_id'], PDO::PARAM_INT);
    $this->db->bind(":opening_id", $data['opening_id'], PDO::PARAM_INT);
    $this->db->bind(":date_reservation", $data['date_reservation'], PDO::PARAM_STR);
    $this->db->bind(":time_reservation", $data['time_reservation'], PDO::PARAM_STR);
    $this->db->bind(":adults", $data['adults'], PDO::PARAM_INT);
    $this->db->bind(":children", $data['children'], PDO::PARAM_INT);

    return $this->db->execute();
  }

  public function deleteReservation($id)
  {
    $this->db->query("
    DELETE FROM `person_score`
    WHERE `reservation_id` = :id
    ");

    $this->db->bind(":id", $id, PDO::PARAM_INT);
    $this->db->execute();

    $this->db->query("
    DELETE FROM `reservation_option`
    WHERE `reservation_id` = :id
    ");

    $this->db->bind(":id", $id, PDO::PARAM_INT);
    $this->db->execute();

    $this->db->query("
    DELETE FROM `reservation`
    WHERE `id` = :id
    ");

    $this->db->bind(":id", $id, PDO::PARAM_INT);
    return $this->db->execute();
  }
}
