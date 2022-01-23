<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>

    <link rel="stylesheet" href="resources/css/usuarios.css">

</head>

<body>
    <?php require_once 'views/header.php' ?>

    <section id="contenido">
        <div id="titulo">
            <h1>Usuarios</h1>
            <form action="users_controller.php" method="post">
                <button type="submit" class="button primary" name="accion" value="nuevo"><img src="resources/img/plus-circle.png" alt="" srcset=""> Nuevo usuario</button>
            </form>
        </div>
        <p>Esta es la página de usuarios. En ella puedes añadir nuevos usuarios, editar los existentes y borrar aquellos que ya figuren en la base de datos.</p>
        <br>
        <br>
        <table>
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
                    <td class="table-actions">
                        <form action="users_controller.php" method="post">
                            <input type="hidden" name="id_usuario" value="<?php echo $user['id'] ?>">
                            <div class="button-group">
                                <button type="submit" name="accion" class="button primary outlined" value="vista_editar"><img src="resources/img/pencil-duotone.png" alt="" srcset=""> editar</button>
                                <button type="submit" name="accion" class="button primary outlined" value="borrar"> <img src="resources/img/trash-duotone.png" alt="" srcset="">borrar</button>
                            </div>
                        </form>
                    </td>
                </tr>

            <?php } ?>
        </table>

    </section>

</body>

</html>