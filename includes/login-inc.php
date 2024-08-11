<?php 

// we use this to make sure the page is 
// accessed by clicking the submit button.
if (isset($_POST["submit"])) {

    // Grabbing the data from the form. 
    $username = $_POST["username"];
    $password = $_POST["password"];

    include "../classes/dbh-classes.php";
    include "../classes/login-classes.php";
    include "../classes/login-contr-classes.php";

    $login = new LoginContr($username, $password);

    $login->loginUser();

    header("location: ../public/index.php?error=none");
    
} 
