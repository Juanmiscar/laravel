<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function ir_home(){
        return view("auth.login");
    }
}
