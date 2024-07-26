<?php

include('connection.php');

$con = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios CRUD</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="container">
        <h1>Crear usuario</h1>
        <div>
            <form action="insert_user.php" method="POST">
                <input type="text" name="name" placeholder="name">
                <input type="text" name="lastname" placeholder="lastname">
                <input type="text" name="username" placeholder="username">
                <input type="text" name="password" placeholder="password">
                <input type="text" name="email" placeholder="email">
                <input type="submit" value="Agregar usuario">
            </form>
        </div>
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['lastname'] ?></td>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['password'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><a href="update.php?id=<?= $row['id'] ?>" class="btn-edit">Editar</a></td>
                    <td><a href="delete_user.php?id=<?= $row['id'] ?>" class="btn-delete">Eliminar</a></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
