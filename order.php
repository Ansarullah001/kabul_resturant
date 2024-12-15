<?php include "admin/connection.php" ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./order.css"/>
    <title>Food Order</title>
</head>
<body>
    <div class="order-container">
        <div class="food">
            <?php 
                // Get the food ID from the URL
                $id = $_GET["id"];
                
                // Query to fetch food details based on the food ID
                $query = "SELECT * FROM foods WHERE id='$id'";
                $result = mysqli_query($conn, $query);
                
                // Fetch food details and display them
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <h1><?= $row['name'] ?></h1>
            <img src="./images/<?= $row['image'] ?>" alt="<?= $row['name'] ?>" width="200">
            <p>Price: $<?= $row['price'] ?></p>
            <p>Calories: <?= $row['calories'] ?> kcal</p>
        </div>
        <div class="order">
            <!-- Order Form -->
            <h2>Place Your Order</h2>
            <form action="order_func.php" method="POST">
                <input type="hidden" name="food_id" value="<?= $row['id'] ?>">
                
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br><br>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" required><br><br>
                
                <label for="address">Address:</label>
                <textarea id="address" name="address" required></textarea><br><br>
                
                <label for="qty">Quantity:</label>
                <input type="number" id="qty" name="qty" min="1" value="1" required><br><br>
                
                <button type="submit">Place Order</button>
            </form>
            
            <?php } ?>
        </div>
        

    </div>
</body>
</html>
