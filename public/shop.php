<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Page</title>
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
            <a href="#">Shop</a>
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

    <div class="special-listing-header">
        <h2>Products</h2>
    </div><hr>

    <div class="search-container">
        <div class="search-bar-container">
            <input type="text" placeholder="Search..." class="search-input">
        </div>
        <div class="search-container-filters">
            <div class="search-items-container">
                <h5>Items</h5>
            </div>
            <div class="search-filter-container">
                <h5>Filter</h5>
            </div>
        </div>
    </div>

    <div class="product-listing">
        <div class="product-listing-item">
            <div class="product-listing-image">
                <p>1</p>
            </div>
            <div class="product-listing-details">
                <h3 class="product-listing-details-text">Item Name</h3>
                <h4 class="product-listing-details-text">Item Cost</h4>
            </div>
        </div>

        <div class="product-listing-item">
            <div class="product-listing-image">
                <p>2</p>
            </div>
            <div class="product-listing-details">
                <h3 class="product-listing-details-text">Item Name</h3>
                <h4 class="product-listing-details-text">Item Cost</h4>
            </div>
        </div>

        <div class="product-listing-item">
            <div class="product-listing-image">
                <p>3</p>
            </div>
            <div class="product-listing-details">
                <h3 class="product-listing-details-text">Item Name</h3>
                <h4 class="product-listing-details-text">Item Cost</h4>
            </div>
        </div>

        <div class="product-listing-item">
            <div class="product-listing-image">
                <p>4</p>
            </div>
            <div class="product-listing-details">
                <h3 class="product-listing-details-text">Item Name</h3>
                <h4 class="product-listing-details-text">Item Cost</h4>
            </div>
        </div>

        <div class="product-listing-item">
            <div class="product-listing-image">
                <p>5</p>
            </div>
            <div class="product-listing-details">
                <h3 class="product-listing-details-text">Item Name</h3>
                <h4 class="product-listing-details-text">Item Cost</h4>
            </div>
        </div>

        <div class="product-listing-item">
            <div class="product-listing-image">
                <p>6</p>
            </div>
            <div class="product-listing-details">
                <h3 class="product-listing-details-text">Item Name</h3>
                <h4 class="product-listing-details-text">Item Cost</h4>
            </div>
        </div>

        <div class="product-listing-item">
            <div class="product-listing-image">
                <p>7</p>
            </div>
            <div class="product-listing-details">
                <h3 class="product-listing-details-text">Item Name</h3>
                <h4 class="product-listing-details-text">Item Cost</h4>
            </div>
        </div>

        <div class="product-listing-item">
            <div class="product-listing-image">
                <p>8</p>
            </div>
            <div class="product-listing-details">
                <h3 class="product-listing-details-text">Item Name</h3>
                <h4 class="product-listing-details-text">Item Cost</h4>
            </div>
        </div>

        <div class="product-listing-item">
            <div class="product-listing-image">
                <p>9</p>
            </div>
            <div class="product-listing-details">
                <h3 class="product-listing-details-text">Item Name</h3>
                <h4 class="product-listing-details-text">Item Cost</h4>
            </div>
        </div>

        <div class="product-listing-item">
            <div class="product-listing-image">
                <p>10</p>
            </div>
            <div class="product-listing-details">
                <h3 class="product-listing-details-text">Item Name</h3>
                <h4 class="product-listing-details-text">Item Cost</h4>
            </div>
        </div>
    </div>
</body>
</html>