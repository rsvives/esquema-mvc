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
    <form action="users_controller.php" method="post">
        <label for="new_user">Crear nuevo usuario:</label>
        <input type="hidden" id="new_user" name="accion" value="nuevo">
        <input type="submit" style="margin-left: 8px;" value="Nuevo usuario">
    </form>
    <br>
    <table cellspacing=0 cellpadding="8" border="1">
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>apellidos</th>
            <th>email</th>
            <th>rol</th>
            <th>acciones</th>
        </tr>
        <?php
        foreach ($users as $user) { ?>

            <tr>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['nombre'] ?></td>
                <td><?php echo $user['apellidos'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['rol'] ?></td>
                <td style="display: flex;">
                    <form action="users_controller.php" method="post">
                        <input type="hidden" name="accion" value="editar">
                        <input type="hidden" name="id_usuario" value="<?php echo $user['id'] ?>">
                        <input type="submit" value="editar">
                    </form>
                    <form action="users_controller.php" method="post">
                        <input type="hidden" name="accion" value="borrar">
                        <input type="hidden" name="id_usuario" value="<?php echo $user['id'] ?>">
                        <input type="submit" style="margin-left: 8px;" value="borrar">
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>








</body>

</html>