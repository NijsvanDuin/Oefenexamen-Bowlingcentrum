
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

    public function getBestellingById($id)
    {
        $this->db->query("SELECT OP.name, TR.code, RE.time_reservation,RO.reservation_id,RO.option_id FROM `reservation_option` as RO
        INNER JOIN `option` as OP
        on RO.option_id = OP.id
        INNER JOIN `reservation` as RE
        on RO.reservation_id = RE.id
        INNER JOIN `track` as TR
        on RE.track_id = TR.id;
        where RO.reservation_id = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        $result = $this->db->single();
        return $result;
    }

    public function getOptions()
    {
        $this->db->query("SELECT `id`, `name` FROM `option`");
        $result = $this->db->resultSet();
        return $result;
    }



    public function createBestellingen($post)
    {
        try {
            $this->db->query("INSERT INTO `reservation_option` (`reservation_id`, `option_id`) VALUES (10, :option_id)");
            $this->db->bind(':option_id', $post["options_id"], PDO::PARAM_INT);
            return $this->db->execute();
        } catch (PDOException $e) {
            echo "<h2>Er is al een bestelling met dit packet op de reservatie. Verwijder het packet van de reservatie of voeg een ander packet toe.</h2>";
            header("Refresh:3; url=" . URLROOT . "/bestellen/index");
            exit();
        }
    }
    public function deleteBestelling($resId, $optId)
    {
        $this->db->query("DELETE FROM reservation_option WHERE `reservation_option`.`reservation_id` = :resId AND `reservation_option`.`option_id` = :optId");
        $this->db->bind(':resId', $resId, PDO::PARAM_INT);
        $this->db->bind(':optId', $optId, PDO::PARAM_INT);
        return $this->db->execute();
    }
}
