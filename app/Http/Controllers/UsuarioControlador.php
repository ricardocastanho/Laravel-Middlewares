<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioControlador extends Controller
{
    public function index(){
        return '<h3>Lista de usuarios</h3>' .
            '<ul>' .
            '<li>Joao</li>' .
            '<li>Maria</li>' .
            '<li>Carlos</li>' .
            '<li>Rodrigo</li>' .
            '</ul>';
    }
}
