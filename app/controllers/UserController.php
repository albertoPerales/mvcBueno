<?php
namespace App\Controllers;

require_once('../app/models/User.php');

use \App\Models\User;
class UserController  
{
    public function __construct()
    {
        echo "en UserController<br>";
    }

    public function index()
    {
        echo "En método index<br>";

        //buscar la lista d usuarios
        //1º FORMA
        $users = User::all(); //arriba pongo use
       
       // 2º forma
       // $users = \App\Models\User::all();

       // 2º forma
       echo "<pre>";
      // print_r($users); //pri  nt_r no pone los tipos de datos
       
       //generar la vista
       include('../views/user/index.php');
    }
    
    public function show($arguments)
    {
        $id = $arguments[0];
        echo "Mostrar el usuario $id";        
    }
    
    public function delete($arguments)
    {
        $id = $arguments[0];
        echo "Borrar el usuario $id";        
    }
}
