<?php
require_once 'UserModel.php';
$UserModel =  new UserModel();


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
        $user = new UserModel($_POST['nombre'], $_POST['apellidos'], $_POST['email'], $_POST['passwd']);
        $user->newUser();

        $users = $user->getAllUsers();
        require_once('views/table_view.php');
        break;

    case 'editar':
        $id_user = $_POST['id_usuario'];
        $UserModel->editUser($id_user);
        break;

    case 'borrar':
        $id_user = $_POST['id_usuario'];
        $UserModel->deleteUser($id_user);
        echo 'borrar';
        break;

    default:
        $users = $UserModel->getAllUsers();
        require_once('views/table_view.php');
        break;
}
