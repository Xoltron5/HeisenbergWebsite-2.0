<?php 

// we use this to make sure the page is 
// accessed by clicking the submit button.
if (isset($_POST["submit"])) {

    // Grabbing the data from the form. 
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["cpassword"];

    include "../classes/dbh-classes.php";
    include "../classes/signup-classes.php";
    include "../classes/signup-contr-classes.php";

    $signup = new SignupContr($username,
    $email, $password, $confirmPassword);

    $signup->signupUser();

    header("location: ../public/index.php?error=none");
    
} 
