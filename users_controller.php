<?php
include 'UserModel.php';
$userModel =  new User();

if (isset($_POST['editar'])) {
    $id_user = $_POST['id_usuario'];
    $user = $userModel->editUser($id_user);
} else {
    //cargar datos de usuarios
    $users = $userModel->getAllUsers();
    //devolver vista por defecto
    include 'views/table_view.php';
}
