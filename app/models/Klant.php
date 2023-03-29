<?php

class Klant
{
    // Properties, fields
    private $db;
    public $helper;

    public function __construct()
    {
        $this->db = new Database();
    }
    public function getKlanten()
    {
        $this->db->query("SELECT per.`first_name`,per.`infix`,per.`last_name`,con.`phone`,con.`email`,per.`isVolwassen`,con.created_at,con.`id` as contact_id from `contact` as con
        inner join `person` as per
        on con.`person_id` = per.`id` ORDER BY per.`last_name` ASC");
        $result = $this->db->resultSet();
        return $result;
    }
    public function getKlantenDatum($post)
    {
        try {
            $this->db->query("SELECT per.`first_name`,per.`infix`,per.`last_name`,con.`phone`,con.`email`,per.`isVolwassen`,con.created_at,con.`id` as contact_id from `contact` as con
        inner join `person` as per
        on con.`person_id` = per.`id`
        WHERE con.created_at = :datums
        ORDER BY per.`last_name` ASC");
            $this->db->bind(':datums', $post, PDO::PARAM_STR);
            $result = $this->db->resultSet();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }
}
