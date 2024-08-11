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
            <form action="../includes/login-inc.php" method="post" class="form">
                <h1 class="login-title">Welcome</h1>
                <div class="input-group">
                    <label for="username">Username/Email</label>
                    <input type="text" id="username" name="username" required>    
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
        
                <p class="info">Don't have an account? <a href="signup.php" class="alternative-tag">Sign Up!</a></p>        
                <button type="submit" name="submit" class="signup-button">Login</button>
            </form>   
        </div>  
    </div>
</body>
</html>