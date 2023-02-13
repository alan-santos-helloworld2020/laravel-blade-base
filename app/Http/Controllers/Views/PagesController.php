<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        return view("cliente.home",[
            "title"=>"Home-Page"
        ]);
    }

    public function cadastro(){
        return view("cliente.cadastro",[
            "title"=>"Cadastro-Page"
        ]);
    }

    public function clientes(){
        return view("cliente.clientes",[
            "title"=>"Clientes-Page"
        ]);
    }

    public function sobre(){
        return view("cliente.sobre",[
            "title"=>"Sobre-Page"
        ]);
    }
}
