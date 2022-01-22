<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>✏️ Editar usuario</title>
    <link rel="stylesheet" href="resources/css/usuarios.css">
</head>

<body>
    <?php require_once 'views/header.php' ?>
    <section id="contenido">
        <div id="titulo">
            <h1>Editar usuario</h1>
        </div>

        <div class="tarjeta">

            <form action="users_controller.php" class="form_rows" method="post">


                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="<?php echo $user['nombre'] ?>">
                <label for="nombre">Apellidos:</label>
                <input type="text" name="apellidos" id="apellidos" value="<?php echo $user['apellidos'] ?>">
                <label for="nombre">Email:</label>
                <input type="email" name="email" id="email" value="<?php echo $user['email'] ?>">
                <label for="nombre">Password:</label>
                <input type="password" name="passwd" id="password" value="<?php echo $user['passwd'] ?>">
                <div class="button-group">
                    <button type="submit" class="button primary outlined" name="accion" value="">Volver</button>
                    <button type="submit" class="button primary" name="accion" value="actualizar_usuario">Guardar</button>
                </div>
                <input type="hidden" name="id_usuario" value="<?php echo $id_user ?>">
            </form>
        </div>

    </section>
</body>

</html>