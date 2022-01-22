<h1>Nuevo usuario</h1>
<form action="users_controller.php" method="post">
    <input type="hidden" name="accion" value="guardar">

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre">
    <label for="nombre">Apellidos:</label>
    <input type="text" name="apellidos" id="apellidos">
    <label for="nombre">Email:</label>
    <input type="email" name="email" id="email">
    <label for="nombre">Password:</label>
    <input type="password" name="passwd" id="password">
    <input type="submit" value="guardar">

</form>
<form action="users_controller.php" method="post">
    <input type="submit" value="volver">
</form>