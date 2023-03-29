<?php

class Reservation
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getReservations()
    {
        $this->db->query("SELECT reservation.id as reservationId,
                                    person.id as personId,
                                    reservation_status.name, 
                                    person.first_name, 
                                    person.last_name, 
                                    person.nickname, 
                                    reservation.date_reservation, 
                                    reservation.hours, 
                                    reservation.adults, 
                                    reservation.children 
                                    from reservation 
                                    INNER JOIN reservation_status ON reservation.reservation_status_id = reservation_status.id 
                                    INNER JOIN person ON reservation.person_id = person.id
                                    ORDER BY reservation.date_reservation DESC");

        $result = $this->db->resultSet();
        return $result;
    }
    public function getReservations2()
    {
        $this->db->query("SELECT 
                                person.first_name
                                ,person.last_name
                                ,person.nickname
                                ,reservation.id as reservationId
                                ,reservation.date_reservation
                                ,reservation.adults
                                ,reservation.children
                                ,track.code
                                ,track.has_lanes
                                FROM reservation
                                INNER JOIN person ON reservation.person_id = person.id
                                INNER JOIN track ON reservation.track_id = track.id");
        $result = $this->db->resultSet();
        return $result;
    }
}
