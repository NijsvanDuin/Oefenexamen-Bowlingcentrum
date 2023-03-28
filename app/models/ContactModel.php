<?php

class ContactModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // Haalt alle contactgegevens op van alle gebruikers
    public function getContactInfo()
    {
        $this->db->query("SELECT person.first_name
                                    ,person.last_name
                                    ,person.id as personId
                                    ,contact.id as id
                                    ,contact.person_id
                                    ,contact. name as personName
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

    // Haalt alleen de contactgegevens op van de gebruiker met het $id
    public function getContactById($id)
    {
            $this->db->query("SELECT person.first_name
                                        ,person.last_name
                                        ,contact.id as id
                                        ,contact.person_id
                                        ,contact.name as personName
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
                                        WHERE contact.person_id = :id");

        $this->db->bind(':id', $id, PDO::PARAM_INT);

        $resultSingle = $this->db->resultSet();
        return $resultSingle;
    }

    public function getSingleContactInfo($id)
    {
        $this->db->query("SELECT `person_id`, `name`, `email`, `phone` FROM contact WHERE person_id = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        $result = $this->db->resultSet();
        return $result;

    }
    // Bewerkt de gewijzigde velden van de tabel contact
    public function updateContactInfo($info, $data)
    {
        $this->db->query("UPDATE `contact`
                            SET `name` = :name,
                                `email` = :email,
                                `phone` = :phone,
                            WHERE `id` = :id");

        $this->db->bind(':name', $data["name"], PDO::PARAM_STR);
        $this->db->bind(':email', $data["email"], PDO::PARAM_STR);
        $this->db->bind(':phone', $data["phone"], PDO::PARAM_STR);
        $this->db->bind(':id', $data["person_id"], PDO::PARAM_INT);

        return $this->db->execute();
    }

    // verwijderd alle data uit contact met het id $uderId
    public function deleteContact($userId)
    {
        $this->db->query("DELETE FROM contact WHERE Id = :userId");
        $this->db->bind(':userId', $userId, PDO::PARAM_INT);
        return $this->db->execute();
    }
}
