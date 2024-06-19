<?php
// Feedback.php
require_once '../controllers/DBcontrollers.php';

class Feedback
{
    private $db;

    public function __construct()
    {
        $this->db = new DBcontroler();
    }

    public function submitFeedback($stay_id, $rate, $content)
    {
        // Open database connection
        if (!$this->db->openConnection()) {
            return "Failed to connect to the database.";
        }

        // Escape user inputs to prevent SQL injection
        $stay_id = $this->db->conn_obj->real_escape_string($stay_id);
        $rating = $this->db->conn_obj->real_escape_string($rate);
        $message = $this->db->conn_obj->real_escape_string($content);

        // Query to retrieve sender and receiver IDs based on Stay ID
        $query = "SELECT r.traveler_id, r.host_id FROM requests r INNER JOIN stays s ON r.id = s.req_id WHERE s.id = '$stay_id'";

        // Execute query
        $result = $this->db->selectFromDB($query);

        if ($result && count($result) > 0) {
            foreach ($result as $row) {
                $sender_id = $row['traveler_id'];
                $receiver_id = $row['host_id'];

                // Query to insert feedback data into users_feedbacks table
                $insert_query = "INSERT INTO users_feedbacks (sender_id, receiver_id, stay_id, rate, content) VALUES ('$sender_id', '$receiver_id', '$stay_id', '$rating', '$message')";

                // Execute insert query
                if (!$this->db->executeQuery($insert_query)) {
                    // Log error and continue to next row
                    echo "Error inserting feedback: " . $this->db->conn_obj->error . "<br>";
                }
            }
            // Close database connection
            $this->db->closeConnection();
            return "Feedback submitted successfully.";
        } else {
            // Close database connection
            $this->db->closeConnection();
            return "No corresponding request found for the given Stay ID.";
        }
    }
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $stay_id = $_POST['stay_id'];
    $rate = $_POST['rating'];
    $message = $_POST['message'];

    // Create instance of Feedback class
    $feedbackController = new Feedback();

    // Call submitFeedback method with parameters
    $result = $feedbackController->submitFeedback($stay_id, $rate, $message);

    // Output result
    echo $result;
}
