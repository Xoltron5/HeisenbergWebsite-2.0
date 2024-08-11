<?php

class SignupContr extends Signup {

    private $username;
    private $email;
    private $password;
    private $cPassword; 

    public function __construct($username, $email, 
    $password, $cPassword) {
        $this->username = $username; 
        $this->email = $email; 
        $this->password = $password; 
        $this->cPassword = $cPassword;
    }

    public function signupUser() {
        if (!$this->emptyInput()) {
            header("location: ../public/signup.php?error=emptyinput");
            exit();
        } 

        if (!$this->validUsername()) {
            header("location: ../public/signup.php?error=invalidusername");
            exit();
        } 

        if (!$this->validEmail()) {
            header("location: ../public/signup.php?error=invalidemail");
            exit();
        } 

        if (!$this->passwordsMatch()) {
            header("location: ../public/signup.php?error=passwordsDoNotMatch");
            exit();
        } 

        if (!$this->usernameTakenCheck()) {
            header("location: ../public/signup.php?error=usernameoremailtaken");
            exit();
        } 

        $this->setUser($this->username, $this->email, $this->password); 
    }

    private function emptyInput() {
        $fields = [
            $this->username,
            $this->email,
            $this->password,
            $this->cPassword
        ];

        foreach($fields as $field) {
            if (empty($field)) {
                return false; 
            }
        }
        return true;
    }

    private function validUsername() {
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            return false;
        }
        return true;
    }

    private function validEmail() {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false; 
        }
        return true;  
    }    

    private function passwordsMatch() {
        if (!($this->password === $this->cPassword)) {
            return false;
        }
        return true; 
    }

    private function usernameTakenCheck() {
        if (!$this->checkUser($this->username, $this->email)) {
            return false;
        }
        return true; 
    }
}