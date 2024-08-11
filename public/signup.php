<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="assets/css2/main.css">
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="assets/images/Heisenberg Logo.png" alt="logo">
            <h1>Heisenberg</h1>
        </div>
        <div class="navbar">
            <a href="index.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="contact.php">Contact</a>
            <?php 
                if (isset($_SESSION["username"])) {
                    echo '<a href="../includes/logout-inc.php" id="logout">Logout</a>';
                } else {
                    echo '<a href="signup.php" class="special-link" id="signup">Signup</a>';
                    echo '<a href="login.php" class="special-link" id="login">Login</a>';
                }
            ?>
        </div>
    </div>

    <div class="full-screen-container">
        <div class="signup-container">
            <form action="../includes/signup-inc.php" method="post" class="form">
                <h1 class="login-title">Welcome</h1>
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>    
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
        
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
        
                <div class="input-group">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" id="cpassword" name="cpassword" required>
                </div>
        
                <p class="info">Already have an account? <a href="login.php" class="alternative-tag">Login!</a></p>        
                <button type="submit" name="submit" class="signup-button">Sign Up</button>
            </form>   
        </div>  
    </div>
</body>
</html>