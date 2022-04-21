<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministradorController extends Controller
{
    //Devolverá la vista de inicio sesión cuando se llame a esta función desde 'web.php'
    public function inicio_sesion(){
        return view("home");
    }
    public function verificar(){
        session_start();
        if (isset($_POST['login'])){
            $nombre = $_POST['username'];
            $passwd = $_POST['password'];
     
            $users = Auth::select('nombre','contrasenya')->get();
     
            foreach ($users as $user)
            {
                if ($user->nombre == $nombre && $user->contrasenya == $passwd){ 
                    $_SESSION["login"] = TRUE;
                    $_SESSION["user"] = $nombre;
                    //verificar
                    return view("administrador.inicioAdmin");
    
                } 
                else{
                    //inicio incorrecto XD rip bozo
                }
            }
            
        }
        else{
            return view("administrador.inicioAdmin");
        }
       
    }

    //Links
    public function productosAdmin(){
        return view("administrador.adminProductos");
    }
    public function categoriasAdmin(){
        return view("administrador.adminCategorias");
    }
    public function pedidosAdmin(){
        return view("administrador.adminPedidos");
    }
}
