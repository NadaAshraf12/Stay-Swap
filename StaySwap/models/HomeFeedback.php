<?php
require_once '../controllers/DBcontrollers.php'; // Include the DBcontroller class

class Test
{
    private $db;

    public function __construct()
    {
        $this->db = new DBcontroler();
    }

    public function getFeedback()
    {
        if ($this->db->openConnection()) {
            $query = "  SELECT f.rate, f.content,t.bio ,t.cover_pic , u.username AS name
                        FROM users_feedbacks AS f
                        INNER JOIN travelers AS t ON f.sender_id = t.user_id
                        INNER JOIN users AS u ON t.user_id = u.id
                        LIMIT 3"; // Limiting to first three rows
            $stmt = $this->db->conn_obj->prepare($query);
            $stmt->execute();
            $result = $stmt->get_result();
            $feedback = $result->fetch_all(MYSQLI_ASSOC);
            $stmt->close();
            return $feedback;
        } else {
            echo "ERROR database connection";
            return false;
        }
    }
}
