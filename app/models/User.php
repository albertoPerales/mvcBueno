<?php 
namespace App\Models;

use PDO;
use PDOException;

class User {
    public function __construct()
    {
        #code...
    }

    public static function all() {
        $db = User::db();
        $statement = $db->query('SELECT * FROM users');
        $users = $statement->fetchAll(PDO::FETCH_CLASS, User::class);
        //fetch lee un registro (de 1 en 1)
        //fetchAll lee todos los registros a un array
        
        //
        return $users;
    }

    protected static function db()
    {
        $dsn = 'mysql:dbname=mvc;host=db';
        $usuario = 'root';
        $contraseña = 'password';
        try {
            $db = new PDO($dsn, $usuario, $contraseña);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
        return $db;
    }


}
