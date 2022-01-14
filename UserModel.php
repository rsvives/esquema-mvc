<?php

class User
{
    private $id;
    private $name;
    private $surname;

    public function __construct()
    {
    }

    public function getAllUsers()
    {
        include 'db.php'; //esto emula a una query a la base de datos
        return $users;
    }
    public function editUser($id)
    {
        echo "editando el usuario con id $id"; //esto emula la función de editar un usuario
    }
}
