<?php
require_once 'db.php';

class UserModel
{
    private $db;
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $rol;

    public function __construct($n = '', $a = '', $e = '', $p = '')
    {
        $this->db = BaseDatos::conexion();
        $this->nombre = $n;
        $this->apellidos = $a;
        $this->email = $e;
        $this->passwd = $p;
        $this->rol = 'user';
    }

    public function getAllUsers()
    {
        $sql =  "SELECT * FROM USUARIOS";
        $users = $this->db->query($sql);
        return $users;
    }
    public function getUserById($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id=$id";
        $user = $this->db->query($sql)->fetch();
        return $user;
    }
    public function newUser()
    {
        $sql = "INSERT INTO usuarios (nombre, apellidos, email, passwd, rol) VALUES(?,?,?,?,?)";
        $stmt = $this->db->prepare($sql)->execute([$this->nombre, $this->apellidos, $this->email, $this->passwd, $this->rol]);
    }
    public function updateUser($id)
    {
        $sql = "UPDATE usuarios SET nombre=?, apellidos=?, email=?, passwd=? WHERE id = ?";
        $stmt = $this->db->prepare($sql)->execute([$this->nombre, $this->apellidos, $this->email, $this->passwd, $id]);
        // echo "editando el usuario con id $id, $this->nombre"; //esto emula la función de editar un usuario
    }
    public function deleteUser($id)
    {
        //aquí iría el SQL para borrar el usuario por id
        $sql = "DELETE FROM usuarios  WHERE id = ?";
        $stmt = $this->db->prepare($sql)->execute([$id]);
        return $mensaje = "borrando el usuario con id $id"; //esto emula la función de borrar un usuario
    }
}
