<?php

class ScoreModel
{
    private $db;


    public function __construct()
    {
        $this->db = new Database();
    }
    public function getScore()
    {
        $sql = "SELECT score.value as scorevalue,
                       person.first_name as firstname,
                       person.last_name as lastname
                       
                       FROM score
                       INNER JOIN person_score
                       ON score.id = person_score.score_id
                       INNER JOIN person
                       ON person_score.person_id = person.id;";
        $this->db->query($sql);
        $result = $this->db->resultSet();
        return $result;
    }

    public function getScoreById($id)
    {
        $sql = "SELECT score.value as scorevalue,
                person.first_name as firstname,
                person.last_name as lastname
        
                FROM score
                INNER JOIN person_score
                ON score.id = person_score.score_id
                INNER JOIN person
                ON person_score.person_id = person.id
                WHERE id = :id;";

        $this->db->query($sql);
        $this->db->bind(':Id', $id, PDO::PARAM_INT);
        $result = $this->db->single();
        return $result;
    }

    public function createScore()
    {
    }

    public function updateScore()
    {
    }

    public function deleteScore()
    {
    }
}
