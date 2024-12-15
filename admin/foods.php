<?php 
    include("./checkLogin.php");
    include "./connection.php";

    if(isset($_POST["delete_food"])){
        $id = $_POST["id"];
        $image = $_POST["image"];
        $res = mysqli_query($conn,"DELETE FROM food_order WHERE food_id = $id");
        if($res){
            $unlink = unlink("../images/$image");
            $res2 = mysqli_query($conn,"DELETE FROM foods WHERE id = $id");
            // print_r($res);
            if($res2){
                header("Location: ./foods.php");
            }
        }
        // echo $_POST["id"];
    }
    if(isset($_POST["add_food"])){
        $name = $_POST["name"];
        $price = $_POST["price"];
        $calories = $_POST["calories"];
        $image = $_FILES["image"];
        $imageName = $image["tmp_name"];
        $imageNameWithTime = time().$image["name"];
        $imageDir = "../images/".$imageNameWithTime;
        // echo "food added";
        $upload = move_uploaded_file($imageName,$imageDir);
        if($upload){
            $query = "INSERT INTO foods (name,price,calories,image) VALUES ('$name','$price','$calories','$imageNameWithTime')";
            $result = mysqli_query($conn,$query);
            if($result){
                header("Location: ./foods.php");
            }
        }
        // print_r($imageName);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <!-- <link rel="stylesheet" href="styles.css"> External CSS for styles -->
    <link rel="stylesheet" href="style2.css"> <!-- External CSS for styles -->
    <style>
        .btn{
                padding: .8em ;
            }
    </style>
</head>
<body>
    
<body>
    <?php include "./navbar.php"; ?>
    <main>
        <div class="container">
            <button class="btn btn-success" onclick="foodDialog.showModal()">Add New Food</button>
            <table class="order-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Calories</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * FROM foods";
                    $result = mysqli_query($conn,$query);
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?= $row["name"] ?></td>
                        <td class="table-image"><img  src="../images/<?= $row["image"] ?>" alt="img"></td>
                        <td><?=$row["price"] ?>$</td>
                        <td><?=$row["calories"] ?> calories</td>
                        <td>
                            <form action="#" method="POST">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <input type="hidden" name="image" value="<?= $row['image'] ?>">
                                <button class="btn btn-danger" name="delete_food">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
    <!-- dialog create food -->
    <dialog id="foodDialog">
        <!-- <h2>Add New Food</h2> -->
        <form action="#" method="POST" enctype="multipart/form-data">
            <h1>Create new food !</h1>
            <div>
                <label for="food_name">Food Name:</label>
                <input type="text" id="food_name" name="name" required>
            </div>
            <div>
                <label for="food_price">Price ($):</label>
                <input type="number" id="food_price" name="price" step="0.01" required>
            </div>
            <div>
                <label for="food_calories">Calories:</label>
                <input type="number" id="food_calories" name="calories" required>
            </div>
            <div>
                <label for="food_image">Image:</label>
                <input type="file" id="food_image" name="image" accept="image/*" required>
            </div>
            <div class="btn-group">
                <button type="submit" name="add_food" class="btn btn-success">Add Food</button>
                <button type="button" id="closeDialogBtn" class="btn btn-danger" onclick="foodDialog.close()">Close</button>
            </div>
        </form>
    </dialog>
    </body>
</html>