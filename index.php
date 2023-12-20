<?php
    session_start();
    include 'config.php';

    if (isset($_POST{'submit'})) {
        
        $name=$_POST['name'];
        $price=$_POST['price'];

        $_SESSION['name']= $name;
        $_SESSION['price']=$price;

        $insert= "INSERT INTO cart_table (item_name, item_price) VALUE ('$name', '$price')";
        
        mysqli_query ($connect, $insert);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="materialize/css/materialize.css"> -->
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="name" id="name" placeholder="item name" required>
        <input type="text" name="price" id="price" placeholder="item price" required>
        <input type="submit" name="submit" id="submit" value="submit">
    </form>
</body>
</html>