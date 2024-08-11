<?php

class LoginContr extends Login {

    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username; 
        $this->password = $password; 
    }

    public function loginUser() {
        if (!$this->emptyInput()) {
            header("location: ../public/login.php?error=emptyinput");
            exit();
        } 

        $this->getUser($this->username, $this->password); 
    }

    private function emptyInput() {
        $fields = [
            $this->username,
            $this->password
        ];

        foreach($fields as $field) {
            if (empty($field)) {
                return false; 
            }
        }
        return true;
    }
}