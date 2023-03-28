
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
        $this->db->query("SELECT OP.name, TR.code, RE.time_reservation,RO.reservation_id,RO.option_id FROM `reservation_option` as RO
        INNER JOIN `option` as OP
        on RO.option_id = OP.id
        INNER JOIN `reservation` as RE
        on RO.reservation_id = RE.id
        INNER JOIN `track` as TR
        on RE.track_id = TR.id;");
        $result = $this->db->resultSet();
        return $result;
    }
}
