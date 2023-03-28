<?php

namespace App\Models;

use PDO;
use App\Libraries\Database;

class ReservationModel
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
    $this->db->query('SELECT * FROM reservation');
    return $this->db->resultSet();
  }

  public function find($id)
  {
    $this->db->query('SELECT * FROM reservation WHERE id = :id');
    $this->db->bind(':id', $id);
    return $this->db->single();
  }

  public function create($data)
  {
    $this->db->query('INSERT INTO reservation (person_id, track_id, opening_id, date_reservation, time_reservation, adults, children) VALUES (:person_id, :track_id, :opening_id, :date_reservation, :time_reservation, :adults, :children)');
    $this->db->bind(':person_id', $data['person_id']);
    $this->db->bind(':track_id', $data['track_id']);
    $this->db->bind(':opening_id', $data['opening_id']);
    $this->db->bind(':date_reservation', $data['date_reservation']);
    $this->db->bind(':time_reservation', $data['time_reservation']);
    $this->db->bind(':adults', $data['adults']);
    $this->db->bind(':children', $data['children']);

    return $this->db->execute();
  }

  public function update($id, $data)
  {
    $this->db->query('UPDATE reservation SET person_id = :person_id, track_id = :track_id, opening_id = :opening_id, date_reservation = :date_reservation, time_reservation = :time_reservation, adults = :adults, children = :children, is_active = :is_active WHERE id = :id');
    $this->db->bind(':id', $id, PDO::PARAM_INT);
    $this->db->bind(':person_id', $data['person_id'], PDO::PARAM_INT);
    $this->db->bind(':track_id', $data['track_id'], PDO::PARAM_INT);
    $this->db->bind(':opening_id', $data['opening_id'], PDO::PARAM_INT);
    $this->db->bind(':date_reservation', $data['date_reservation'], PDO::PARAM_STR);
    $this->db->bind(':time_reservation', $data['time_reservation'], PDO::PARAM_STR);
    $this->db->bind(':adults', $data['adults'], PDO::PARAM_INT);
    $this->db->bind(':children', $data['children'], PDO::PARAM_INT);
    $this->db->bind(':is_active', $data['is_active'], PDO::PARAM_BOOL);

    return $this->db->execute();
  }

  public function delete($id)
  {
    $this->db->query('DELETE FROM reservation WHERE id = :id');
    $this->db->bind(':id', $id, PDO::PARAM_INT);

    return $this->db->execute();
  }
}
