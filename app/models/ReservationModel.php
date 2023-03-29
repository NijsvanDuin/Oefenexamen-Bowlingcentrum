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
                       reservation.children,
                
                FROM reservation
                INNER JOIN person
                ON reservation.person_id = person.id
                ORDER BY reservation.date_reservation;";
        $this->db->query($sql);
        $result = $this->db->resultSet();
        return $result;
    }

    public function getDate()
    {
        $sql = "SELECT reservation.date_reservation
                
                FROM reservation;";

        $this->db->query($sql);
        $result = $this->db->resultSet();
        return $result;
    }

    public function updateOption()
    {
        $sql = "UPDATE option
                SET option.name = ;";
    }
}
