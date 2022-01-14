<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Mi tabla</h1>
    <p>datos de tabla:</p>
    <br>
    <?php
    foreach ($users as $user) {
        echo "<p><b>id: </b>" . $user['id'] . "<b>   nombre: </b>" . $user['name'] . "<b>   apellidos:</b> " . $user['surname'] . " </p>";
        echo ' <form action="users_controller.php" method="post">
                    <input type="hidden" name="editar" value="editar">
                    <input type="hidden" name="id_usuario" value="' . $user['id'] . '">
                    <input type="submit" value="editar">
                </form>';
    }
    ?>






</body>

</html>