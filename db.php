<?php

class BaseDatos
{
    public static function conexion()
    {
        $cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
        $usuario = 'root';
        $clave = '';
        $db = new PDO($cadena_conexion, $usuario, $clave);
        return $db;
    }
}
