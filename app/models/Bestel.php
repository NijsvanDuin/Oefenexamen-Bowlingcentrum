
<?php
class Bestel
{
    // Properties, fields
    private $db;
    public $helper;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getBestellingen()
    {
        $this->db->query("SELECT * FROM `reservation_option`;");
        $result = $this->db->resultSet();
        return $result;
    }
}
