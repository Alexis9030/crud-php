<?php

include('connection.php');

$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuarios</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="users-form">
        <form action="edit_user.php" method="POST">
            <h1>Editar usuario</h1>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="name" placeholder="name" value="<?= $row['name'] ?>">
            <input type="text" name="lastname" placeholder="lastname" value="<?= $row['lastname'] ?>">
            <input type="text" name="username" placeholder="username" value="<?= $row['username'] ?>">
            <input type="text" name="password" placeholder="password" value="<?= $row['password'] ?>">
            <input type="text" name="email" placeholder="email" value="<?= $row['email'] ?>">
            
            <input type="submit" value="Actualizar información">



        </form>    


</body>
</html>