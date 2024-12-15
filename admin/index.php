<?php
    // Start session to manage user login state (optional)
    include "connection.php"; // Make sure the connection is established
    session_start();

    // Check if the user is already logged in and redirect to another page if necessary
    if (isset($_SESSION['user_id'])) {
        header("Location: order.php"); // Redirect to a dashboard or home page after login
        exit();
    }

    // If the form is submitted, process the login
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        // echo md5($password);
        // Query to check if the user exists in the database
        $query = "SELECT * FROM users WHERE email='$username' LIMIT 1";
        $result = mysqli_query($conn, $query);
        
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            
            // Check if password matches (assuming password is hashed)
            if (md5($password )===$row['password']) {
                // Login successful: set session variables
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];

                // Redirect to a secure page (e.g., dashboard)
                header("Location: order.php");
                exit();
            } else {
                $error_message = "Incorrect password!";
            }
        } else {
            $error_message = "No user found with that username or email.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css"> <!-- External CSS -->
</head>
<body>
    <div class="container">
        <h1>Login to Your Account</h1>
        
        <!-- Display error message if login fails -->
        <?php if (isset($error_message)): ?>
            <div class="error-message"><?= $error_message ?></div>
        <?php endif; ?>

        <!-- Login Form -->
        <form action="index.php" method="POST">
            <label for="username">Email:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username or email" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required><br>
            
            <button type="submit">Login</button>
        </form>
        
    </div>
</body>
</html>
