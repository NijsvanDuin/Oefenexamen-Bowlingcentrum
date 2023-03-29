<?php

class Contact
{
    // Properties, fields
    private $db;
    public $helper;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getContacten()
    {
        $this->db->query("SELECT per.`first_name`,per.`infix`,per.`last_name`,con.`phone`,con.`email`,per.`isVolwassen`,con.`id`as contact_id from `contact` as con
        inner join `person` as per
        on con.`person_id` = per.`id`");
        $result = $this->db->resultSet();
        return $result;
    }
    public function getContactById($id)
    {
        $this->db->query("SELECT per.`first_name`,per.`infix`,per.`last_name`,con.`phone`,con.`email`,per.`isVolwassen`,con.`id` as contact_id from `contact` as con
        inner join `person` as per
        on con.`person_id` = per.`id`
        where con.`id` = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        $result = $this->db->single();
        return $result;
    }
    public function updateEmail($post)
    {
        try {
            $this->db->query("UPDATE `contact` SET `email` = :email WHERE `id` = :id");
            $this->db->bind(':id', $post["id"], PDO::PARAM_INT);
            $this->db->bind(':email', $post["email"], PDO::PARAM_STR);
            return $this->db->execute();
        } catch (PDOException $e) {
            echo $e->getMessage() . "Rollback";
            $this->db->dbHandler->rollBack();
        }
    }
}
