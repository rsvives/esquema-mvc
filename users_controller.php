<?php
require_once 'UserModel.php';
if (isset($_POST['email'])) {
    $UserModel =  new UserModel($_POST['nombre'], $_POST['apellidos'], $_POST['email'], $_POST['passwd']);
} else {
    $UserModel =  new UserModel();
}


if (isset($_POST['accion'])) {
    $accion = $_POST['accion'];
} else {
    $accion = '';
}

switch ($accion) {
    case '': //si no se le pasa ninguna accion
        $users = $UserModel->getAllUsers(); //cargar datos de usuarios
        require_once('views/table_view.php'); //devolver vista por defecto
        break;

    case 'nuevo':
        require_once('views/new_view.php');
        break;

    case 'guardar':

        $UserModel->newUser();

        $users = $UserModel->getAllUsers();
        require_once('views/table_view.php');
        break;
    case 'vista_editar':
        $id_user = $_POST['id_usuario'];
        $user = $UserModel->getUserById($id_user);
        require_once('views/edit_view.php');

        break;

    case 'actualizar_usuario':
        $id_user = $_POST['id_usuario'];
        $UserModel->updateUser($id_user);

        $users = $UserModel->getAllUsers();
        require_once('views/table_view.php');
        break;

    case 'borrar':
        $id_user = $_POST['id_usuario'];
        $UserModel->deleteUser($id_user);

        $users = $UserModel->getAllUsers();
        require_once('views/table_view.php');
        break;

    default:
        $users = $UserModel->getAllUsers();
        require_once('views/table_view.php');
        break;
}
