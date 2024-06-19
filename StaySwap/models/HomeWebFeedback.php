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
            $query = "SELECT 
                        users.username AS name,
                        web_feedbacks.content,
                        web_feedbacks.rate,
                        CASE 
                            WHEN travelers.id IS NOT NULL THEN travelers.bio
                            WHEN hosts.id IS NOT NULL THEN hosts.description
                        END AS profile_description,
                        CASE 
                            WHEN travelers.id IS NOT NULL THEN travelers.cover_pic
                            WHEN hosts.id IS NOT NULL THEN hosts.img1
                        END AS profile_pic
                    FROM 
                        users
                    LEFT JOIN 
                        web_feedbacks ON users.id = web_feedbacks.user_id
                    LEFT JOIN 
                        travelers ON users.id = travelers.user_id
                    LEFT JOIN 
                        hosts ON users.id = hosts.user_id
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
