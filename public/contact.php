<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
            <a href="#">Contact</a>
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

    <div class="special-listing-header">
        <h2>Get in touch with us</h2>
        <h3>PLEASE FEEL FREE TO DROP US AN EMAIL.</h3>
        <h3>OUR STAFF ALWAYS BE THERE TO HELP YOU OUT. DO NOT HESITATE! 🙂</h3>
    </div><hr>

    <div class="contact-container">
        <div class="contact-details-container">
            <div class="contact-details">
                <div class="details-icon">
                    <img src="assets/images/address.png" alt="" width="56px">
                </div>
                <div class="address-details">
                    <h4 class="address-header">Address</h4>
                    <h4 class="address-info">27 Fakestreet Blueberry</h4>
                    <h4 class="address-info">D12345X, Ireland</h4>
                </div>
            </div>

            <div class="contact-details">
                <div class="details-icon">
                    <img src="assets/images/phone.png" alt="" width="56px">
                </div>
                <div class="address-details">
                    <h4 class="address-header">Phone</h4>
                    <h4 class="address-info">Mobile: 012 123456</h4>
                    <h4 class="address-info">Hotline: 013 789012</h4>
                </div>
            </div>

            <div class="contact-details">
                <div class="details-icon">
                    <img src="assets/images/working-time.png" alt="" width="56px">
                </div>
                <div class="address-details">
                    <h4 class="address-header">Working Time</h4>
                    <h4 class="address-info">Monday - Friday: 9:00 - 22:00</h4>
                    <h4 class="address-info">Saturday & Sunday: 9:00 - 21:00</h4>
                </div>
            </div>
        </div>
        <div class="contact-us-container">
            <h2>Drop us a line!</h2>

            <form action="" class="input-group-container">
                <div class="input-group">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="subject">    
                </div>

                <div class="input-group">
                    <label for="message">Message</label>
                    <textarea name="textarea" cols="30" rows="5"></textarea>
                </div>

                <div class="submit-button">
                    <button type="submit" class="submit-button">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>