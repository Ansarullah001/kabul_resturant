<?php
include("./checkLogin.php");
include "connection.php";  // Include your database connection

    // Fetch orders from food_order and join with foods to get food name
    $query = "SELECT food_order.id, food_order.username, food_order.email, food_order.phone, food_order.address, 
                food_order.qty,food_order.status, foods.name AS food_name FROM food_order
                INNER JOIN foods ON food_order.food_id = foods.id";
            
            if(isset($_POST['delivery'])){
                $id = $_POST['id'];
                $query = "UPDATE food_order SET status='delivered' WHERE id=$id";
                $result = mysqli_query($conn, $query);
                header('Location: ./order.php');
                // echo $result;
                // echo "Delivered".$_POST['id'];
            }
            if(isset($_POST["cancel"])){
                $id = $_POST['id'];
                $query = "UPDATE food_order SET status='cancel' WHERE id=$id";
                $result = mysqli_query($conn, $query);
                header('Location: ./order.php');
                echo "canceled".$_POST['id'];
            }

            $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <!-- <link rel="stylesheet" href="styles.css"> External CSS for styles -->
    <link rel="stylesheet" href="style2.css"> <!-- External CSS for styles -->
</head>
<body>
<?php include "./navbar.php"; ?>

    <main>
        <div class="container">
            <h1 class="container-title">Orders List</h1>
    
            <!-- Display Order Details -->
            <?php if (mysqli_num_rows($result) > 0): ?>
                <table class="order-table">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Food Ordered</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td><?= $row['username'] ?></td>
                                <td><?= $row['email'] ?></td>
                                <td><?= $row['phone'] ?></td>
                                <td><?= $row['address'] ?></td>
                                <td><?= $row['food_name'] ?></td>
                                <td><?= $row['qty'] ?></td>
                                <?php 
                                    if( $row['status'] == 'order'){
                                        
                                
                                ?>
                                    <td>
                                        <form action="order.php" method="POST">
                                            <input type="hidden" value="<?= $row['id'] ?>" name="id">
                                            <button class="btn btn-danger" name="cancel">Cancel</button>
                                            <button class="btn btn-success" name="delivery">Delivered</button>
                                        </form>
                                    </td>
                                <?php }else{ ?>
                                <td style="text-align:center;font-weight:bold;"><?= $row['status'] ?></td>
                                <?php } ?>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No orders found.</p>
            <?php endif; ?>
        </div>
    </main>
</body>
</html>
