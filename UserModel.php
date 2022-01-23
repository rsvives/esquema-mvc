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
        $this->db->prepare($sql)->execute([$this->nombre, $this->apellidos, $this->email, $this->passwd, $id]);
    }
    public function deleteUser($id)
    {
        $sql = "DELETE FROM usuarios  WHERE id = ?";
        $this->db->prepare($sql)->execute([$id]);
    }
}
