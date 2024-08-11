<?php

// This class is used to interact with the database. 
// This is used to handle queries for login the user.

class Login extends DatabaseHandler {

    protected function getUser($username, $password) {
        $selectUserQuery = "SELECT username, email, password FROM user WHERE username = ? OR email = ?;";

        $ps = $this->connect()->prepare($selectUserQuery);

        if (!$ps->execute(array($username, $username))) {
            // closes statement
            $ps = null;

            // navigates the user back to the signup page
            // with an error message
            header("location: ../public/login.php?error=stmtfailed");
            
            // exits the script.
            exit();
        }

        if ($ps->rowCount() == 0) {
            // closes statement
            $ps = null;

            header("location: ../public/login.php?error=usernotfound");

            // exits the script.
            exit();
        }

        $result = $ps->fetchall(PDO::FETCH_ASSOC);
        $checkPassword = password_verify($password, $result[0]["password"]);

        if (!$checkPassword) {
            // closes statement
            $ps = null;

            // navigates the user back to the signup page
            // with an error message
            header("location: ../public/login.php?error=wrongpassword");
            exit();
        }

        session_start();

        $_SESSION["username"] = $result[0]["username"];


        // closes statement
        $ps = null;
    }
}