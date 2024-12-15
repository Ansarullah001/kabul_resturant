<?php
include "admin/connection.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $food_id = $_POST['food_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $qty = $_POST['qty'];

    // Insert the order into the database
    $query = "INSERT INTO food_order (food_id, username, email, phone, address, qty) 
              VALUES ('$food_id', '$username', '$email', '$phone', '$address', '$qty')";

    if (mysqli_query($conn, $query)) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>