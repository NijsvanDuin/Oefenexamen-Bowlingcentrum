<?php

class ContactModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getContactInfo()
    {
        $this->db->query("SELECT person.first_name
                                    ,person.last_name
                                    ,person.id as personId
                                    ,contact.id as id
                                    ,contact.phone
                                    ,contact.email
                                    ,contact.created_at
                                    ,contact.updated_at
                                    ,user.id as userId
                                    ,user.is_active
                                    ,role.name
                                    ,role.id as roleId
                                    ,contact.created_at
                                    ,contact.updated_at
                                    FROM Person
                                    INNER JOIN contact ON contact.person_id = person.id
                                    INNER JOIN user ON user.person_id = person.id
                                    INNER JOIN user_role ON user_role.user_id = user.id
                                    INNER JOIN role ON user_role.role_id = role.id");

        $result = $this->db->resultSet();
        return $result;
    }

    public function getContactById($id)
    {
            $this->db->query("SELECT person.first_name
                                        ,person.last_name
                                        ,contact.id as id
                                        ,contact.person_id
                                        ,contact.phone
                                        ,contact.email
                                        ,contact.created_at
                                        ,contact.updated_at
                                        ,user.id as userId
                                        ,user.is_active
                                        ,role.name
                                        ,contact.created_at
                                        ,contact.updated_at
                                        FROM Person
                                        INNER JOIN contact ON contact.person_id = person.id
                                        INNER JOIN user ON user.person_id = person.id
                                        INNER JOIN user_role ON user_role.user_id = user.id
                                        INNER JOIN role ON user_role.role_id = role.id
                                                            WHERE user.Id = :userId");

        $this->db->bind(':userId', $id, PDO::PARAM_INT);

        $resultSingle = $this->db->resultSet();
        return $resultSingle;
    }

    public function updateContactInfo($info)
    {
        $this->db->query("UPDATE `contact`
                            SET `name` = :name,
                                `email` = :email,
                                `phone` = :phone,
                            WHERE `id` = :id");

        $this->db->bind(':name', $info["name"], PDO::PARAM_STR);
        $this->db->bind(':email', $info["email"], PDO::PARAM_STR);
        $this->db->bind(':phone', $info["phone"], PDO::PARAM_STR);
        $this->db->bind(':id', $info["person_id"], PDO::PARAM_INT);

        return $this->db->execute();
    }

    public function deleteContact($userId)
    {
        $this->db->query("DELETE FROM contact WHERE Id = :userId");
        $this->db->bind(':userId', $userId, PDO::PARAM_INT);
        return $this->db->execute();
    }
}
