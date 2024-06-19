<?php
require_once '../controllers/DBcontrollers.php';

class AuthControlers {
    protected $session_id; // Change from static to instance property

    public function login($user) {
        $conn = new DBcontroler();
        if ($conn->openConnection()) {
            $query = "SELECT * FROM users WHERE username = '$user->name' AND password = '$user->password'";
            $result = $conn->selectFromDB($query);
            echo 'Length of result : ' . count($result) . '<br>';
            echo 'result: ';
            print_r($result);
            $key = true;
            if (count($result) == 0) {
                session_start();
                $_SESSION["errMsg"] = "You have entered wrong username or password.";
                $key = false;
            } else {
                session_start();
                $_SESSION["id"] = $result[0]['id'];
                $_SESSION["UN"] = $result[0]['username'];
                $_SESSION["pass"] = $result[0]['password'];
                $_SESSION["state"] = $result[0]['state'];
                $this->session_id = $_SESSION["id"]; 
                echo '<br><br>Welcome, ' . $user->name . '<br>';
            }
            $conn->closeConnection();
            echo 'login ended<br><br><br>';
            return $key;
        }
    }

    public function get_SESSION_ID() {
        return $this->session_id; 
    }
}
?>
