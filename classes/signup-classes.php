<?php

// This class is used to interact with the database. 
// This is used to handle queries for signing up the user.

class Signup extends DatabaseHandler {

    protected function setUser($username, $email, $password) {
        $insertUserQuery = "INSERT INTO user (username, email, password)
        VALUES (?, ?, ?);";

        $ps = $this->connect()->prepare($insertUserQuery);

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if (!$ps->execute(array($username, $email, $hashedPassword))) {
            // closes statement
            $ps = null;

            // navigates the user back to the signup page
            // with an error message
            header("location: ../public/signup.php?error=stmtfailed");
            
            // exits the script.
            exit();
        }

        session_start();

        $_SESSION["username"] = $username;

        // closes statement
        $ps = null;
    }

    protected function checkUser($username, $email) {
        $checkUserQuery = "SELECT username, 
        email FROM user WHERE 
        username = ? OR email = ?;";

        $ps = $this->connect()->prepare($checkUserQuery);
 
        // We execute the query passing in the parameters 
        // and binding them to the prepared statement. 
        if (!$ps->execute(array($username, $email))) {
            
            // closes statement
            $ps = null;

            // navigates the user back to the signup page
            // with an error message
            header("location: ../public/signup.php?error=stmtfailed");
            
            // exits the script.
            exit();
        }

        $resultCheck;
        // goes in queries the database finds out if 
        // the username or email exists. 
        if ($ps->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }

        // closes statement
        $ps = null;
        return $resultCheck; 
    }
}