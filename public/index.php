<?php
    session_start();
    // if (isset($_SESSION["username"])) {
    //     echo $_SESSION["username"];
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heisenberg</title>
    <link rel="stylesheet" href="assets/css2/main.css">
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="assets/images/Heisenberg Logo.png" alt="logo">
            <h1>Heisenberg</h1>
        </div>
        <div class="navbar">
            <a href="#">Home</a>
            <a href="shop.php">Shop</a>
            <a href="contact.php">Contact</a>
            <!-- <a href="signup.php" class="special-link" id="signup">Signup</a>
            <a href="login.php" class="special-link" id="login">Login</a> -->
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

    <div class="top-section">
        <div class="top-section-main">
            <div class="top-section-header">
                <h1>Get your Vitamins & Minerals!</h1>
            </div>
            <div class="shop-now-button">
                <a href="shop.php" class = "special-link" id = "shop-now">Shop Now</a>
            </div>
        </div>
    </div><br><hr><br>

    <div class="facts">
        <div class="facts-content">
            <div class="facts-logo">
                <img src="assets/images/Money Logo.png" alt="money logo">
            </div>
            <div class="facts-desc">
                <h3>Secure Payment</h3>
                <h4>ALL CARDS ACCEPTED!</h4>
            </div>
        </div>

        <div class="facts-content">
            <div class="facts-logo">
                <img src="assets/images/Online Support Icon.png" alt="online support logo">
            </div>
            <div class="facts-desc">
                <h3>Online Support</h3>
                <h4>TECHNIAL SUPPORT 24/7!</h4>
            </div>
        </div>

        <div class="facts-content">
            <div class="facts-logo">
                <img src="assets/images/free shipping.png" alt="free shipping logo">
            </div>
            <div class="facts-desc">
                <h3>Free Shipping</h3>
                <h4>ON ALL ORDERS TODAY!</h4>
            </div>
        </div>

        <div class="facts-content">
            <div class="facts-logo">
                <img src="assets/images/Discount Icon.png" alt="discounts logo">
            </div>
            <div class="facts-desc">
                <h3>Discounts Online</h3>
                <h4>FREQUENT DISCOUNTS!</h4>
            </div>
        </div>
    </div>

    <div class="item-showcase">
        <div class="item-showcased">
            <p>1</p>
        </div>
        <div class="item-showcased">
            <p>2</p>
        </div>
    </div>

    <div class="special-listing-header">
        <h2>New Arrivals!</h2>
    </div>
    <div class="special-listing">
        <div class="special-listing-item">
            <div class="special-listing-image">
                <p>1</p>
            </div>
            <div class="special-listing-details">
                <h3 class="special-listing-details-text">Item Name</h3>
                <h4 class="special-listing-details-text">Item Cost</h4>
            </div>
        </div>

        <div class="special-listing-item">
            <div class="special-listing-image">
                <p>2</p>
            </div>
            <div class="special-listing-details">
                <h3 class="special-listing-details-text">Item Name</h3>
                <h4 class="special-listing-details-text">Item Cost</h4>
            </div>
        </div>

        <div class="special-listing-item">
            <div class="special-listing-image">
                <p>3</p>
            </div>
            <div class="special-listing-details">
                <h3 class="special-listing-details-text">Item Name</h3>
                <h4 class="special-listing-details-text">Item Cost</h4>
            </div>
        </div>

        <div class="special-listing-item">
            <div class="special-listing-image">
                <p>4</p>
            </div>
            <div class="special-listing-details">
                <h3 class="special-listing-details-text">Item Name</h3>
                <h4 class="special-listing-details-text">Item Cost</h4>
            </div>
        </div>

        <div class="special-listing-item">
            <div class="special-listing-image">
                <p>5</p>
            </div>
            <div class="special-listing-details">
                <h3 class="special-listing-details-text">Item Name</h3>
                <h4 class="special-listing-details-text">Item Cost</h4>
            </div>
        </div>
    </div>

    <div class="special-listing-header">
        <h2>Featured Items</h2>
    </div>
    <div class="special-listing">
        <div class="special-listing-item">
            <div class="special-listing-image">
                <p>1</p>
            </div>
            <div class="special-listing-details">
                <h3 class="special-listing-details-text">Item Name</h3>
                <h4 class="special-listing-details-text">Item Cost</h4>
            </div>
        </div>
        
        <div class="special-listing-item">
            <div class="special-listing-image">
                <p>2</p>
            </div>
            <div class="special-listing-details">
                <h3 class="special-listing-details-text">Item Name</h3>
                <h4 class="special-listing-details-text">Item Cost</h4>
            </div>
        </div>

        <div class="special-listing-item">
            <div class="special-listing-image">
                <p>3</p>
            </div>
            <div class="special-listing-details">
                <h3 class="special-listing-details-text">Item Name</h3>
                <h4 class="special-listing-details-text">Item Cost</h4>
            </div>
        </div>

        <div class="special-listing-item">
            <div class="special-listing-image">
                <p>4</p>
            </div>
            <div class="special-listing-details">
                <h3 class="special-listing-details-text">Item Name</h3>
                <h4 class="special-listing-details-text">Item Cost</h4>
            </div>
        </div>
    </div>

    <div class="footer">
        <h2>Copyright © 2024 Denis, All Rights Reserved</h2>
    </div>
</body>
</html>
