<?php

class ScoreModel
{
    private $db;


    public function __construct()
    {
        $this->db = new Database();
    }

    //hier worden de namen en de scores van de klanten opgehaald
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
        $sql = "SELECT score.id as scoreId,
                score.value as scorevalue,
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

    //hier wordt doormiddel van een stored procedure de score toegevoegd
    public function createScore($post)
    {
        try {
            $this->db->query("call add_score(:person_id,:value,1");

            $this->db->bind(':value', $post['value'], PDO::PARAM_STR);
            $this->db->execute();
        } catch (PDOException $e) {
            echo $e;
            exit();
        }
    }
    // haalt de gegevens van de personenen appart op
    public function getPerson()
    {
        $this->db->query("
        SELECT
            `id`,
            `first_name`,
            `last_name`
        FROM
            `person`
        ");
        return $this->db->resultSet();
    }


    public function updateScore()
    {
    }

    //hiermee wordt de score uit de database gehaald
    public function deleteScore($id)
    {
        $this->db->query("DELETE FROM score WHERE id = :id");
        $this->db->bind("id", $id, PDO::PARAM_INT);
        return $this->db->execute();
    }
}
