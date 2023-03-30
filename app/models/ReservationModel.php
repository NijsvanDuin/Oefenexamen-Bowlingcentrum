<?php

class ReservationModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getReservation()
    {
        $sql = "SELECT person.id,
                       person.first_name,
                       reservation.date_reservation,
                       reservation.PlayTime,
                       reservation.start_time,
                       reservation.end_time,
                       reservation.adults,
                       reservation.children
                
                FROM reservation
                INNER JOIN person
                ON reservation.person_id = person.id
                ORDER BY reservation.date_reservation;";
        $this->db->query($sql);
        $result = $this->db->resultSet();
        return $result;
    }

    public function getDate($post)
    {
        try {
            $sql = "SELECT person.id,
                        person.first_name,
                        reservation.date_reservation,
                        reservation.PlayTime,
                        reservation.start_time,
                        reservation.end_time,
                        reservation.adults,
                        reservation.children
    
                    FROM reservation
                    INNER JOIN person
                    ON reservation.person_id = person.id
                    WHERE date_reservation <= :datums
                    ORDER BY person.first_name ASC;";

            $this->db->query($sql);
            $this->db->bind(':datums', $post, PDO::PARAM_STR);
            $result = $this->db->resultSet();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function updateOption()
    {
        $sql = "UPDATE option
                SET option.name = ;";
    }
}
