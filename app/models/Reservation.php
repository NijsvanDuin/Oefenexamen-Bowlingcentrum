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


    public function getSingleTrack($trackId)
    {
        $this->db->query("SELECT reservation.id, reservation.track_id as trackId FROM reservation WHERE id = $trackId");
        $result = $this->db->resultSet();
        return $result;
    }

    public function getTracks() {
        $this->db->query("SELECT reservation.id, reservation.track_id as trackId FROM reservation");
        $result = $this->db->resultSet();
        return $result;
    }

    // public function getSingleTrack($id)
    // {
    //     $this->db->query("SELECT reservation.id, reservation.track_id as trackId FROM reservation WHERE reservation.id = $id");
    // }

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
                                ,track.id as trackid
                                ,track.code
                                ,track.has_lanes
                                FROM reservation
                                INNER JOIN person ON reservation.person_id = person.id
                                INNER JOIN track ON reservation.track_id = track.id");
        $result = $this->db->resultSet();
        return $result;
    }

    public function updateTrack($trackId, $post)
    {
        $this->db->query("    UPDATE `reservation`
                                SET `track_id` = :newTrack
                                WHERE `id` = :trackId");

        $this->db->bind(':trackId', $trackId, PDO::PARAM_INT);
        $this->db->bind(':newTrack', $post['track_id'], PDO::PARAM_INT);
        return $this->db->execute();
    }
}
