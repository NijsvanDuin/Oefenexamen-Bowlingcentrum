<?php

class Reserveer
{
    // Properties, fields
    private $db;

    public function __construct()
    {
        $this->db = new Database();
        //   $this->helper = new SqlHelper();
    }

    public function getGereedschap()
    {
        $this->db->query("SELECT * FROM `gereedschap` where `inGebruik` is 0;");
        $result = $this->db->resultSet();
        return $result;
    }
}
