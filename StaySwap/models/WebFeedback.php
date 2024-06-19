<?php
// Feedback.php
// require_once '../controllers/DBcontrollers.php';

// class Feedback
// {
//     private $db;

//     public function __construct()
//     {
//         $this->db = new DBcontroler();
//     }

//     public function submitFeedback($rate, $content)
//     {
//         // Open database connection
//         if (!$this->db->openConnection()) {
//             return "Failed to connect to the database.";
//         }

//         // Escape user inputs to prevent SQL injection
//         $rating = $this->db->conn_obj->real_escape_string($rate);
//         $message = $this->db->conn_obj->real_escape_string($content);

//         // Query to retrieve user_id from another table
//         $query = "SELECT id FROM users";

//         // Execute query
//         $result = $this->db->selectFromDB($query);

//         if ($result && count($result) > 0) {
//             foreach ($result as $row) {
//                 $user_id = $row['id'];

//                 // Query to insert feedback data into web_feedbacks table
//                 $insert_query = "INSERT INTO web_feedbacks (user_id, rate, content) VALUES ('$user_id', '$rating', '$message')";

//                 // Execute insert query
//                 if (!$this->db->executeQuery($insert_query)) {
//                     // Log error and continue to next row
//                     echo "Error inserting feedback: " . $this->db->conn_obj->error . "<br>";
//                 }
//             }
//             // Close database connection
//             $this->db->closeConnection();
//             return "Feedback submitted successfully.";
//         } else {
//             // Close database connection
//             $this->db->closeConnection();
//             return "No users found.";
//         }
//     }
// }

// // Check if form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Get form data
//     $rate = $_POST['rating'];
//     $message = $_POST['message'];

//     // Create instance of Feedback class
//     $feedbackController = new Feedback();

//     // Call submitFeedback method with parameters
//     $result = $feedbackController->submitFeedback($rate, $message);

//     // Output result
//     echo $result;
// }





// Start the session
session_start();

// Simulate user login by setting user_id in the session
$_SESSION['user_id'] = 2; // Replace 123 with the actual user ID

// Now you can proceed with testing the submitFeedback method

// Feedback.php
require_once '../controllers/DBcontrollers.php';

class Feedback
{
    private $db;

    public function __construct()
    {
        $this->db = new DBcontroler();
    }

    public function submitFeedback($rate, $content)
    {
        // Open database connection
        if (!$this->db->openConnection()) {
            return "Failed to connect to the database.";
        }
        $rating = $this->db->conn_obj->real_escape_string($rate);
        $message = $this->db->conn_obj->real_escape_string($content);
        if (!isset($_SESSION['user_id'])) {
            session_start();
            // Close database connection
            $this->db->closeConnection();
            return "User ID not found in session.";
        }
        $user_id = $_SESSION['user_id'];
        $check_query = "SELECT id FROM users WHERE id = '$user_id'";
        $user_exists = $this->db->selectFromDB($check_query);
        if (!$user_exists) {
            $this->db->closeConnection();
            return "User ID does not exist in the database.";
        }
        $insert_query = "INSERT INTO web_feedbacks (user_id, rate, content) VALUES ('$user_id', '$rating', '$message')";
        if ($this->db->executeQuery($insert_query)) {
            $this->db->closeConnection();
            return "Feedback submitted successfully.";
        } else {
            $error_message = "Error inserting feedback: " . $this->db->conn_obj->error;
            $this->db->closeConnection();
            return $error_message;
        }
    }
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $rate = $_POST['rating'];
    $message = $_POST['message'];

    // Create instance of Feedback class
    $feedbackController = new Feedback();

    // Call submitFeedback method with parameters
    $result = $feedbackController->submitFeedback($rate, $message);

    // Output result
    echo $result;
}
