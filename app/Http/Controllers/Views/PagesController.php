<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class PagesController extends Controller
{
    private $store;
    public function __construct(Cliente $cliente){
      $this->store = $cliente;


    }
    //
    public function home(){

        return view("cliente.home",[
            "title"=>"Home-Page",

        ]);
    }

    public function cadastro(){
        return view("cliente.cadastro",[
            "title"=>"Cadastro-Page"
        ]);
    }

    public function clientes(){
        $clientes = $this->store->paginate(15);
        return view("cliente.clientes",[
            "title"=>"Clientes-Page",
            "clientes"=>$clientes
        ]);
    }

    public function sobre(){
        return view("cliente.sobre",[
            "title"=>"Sobre-Page"
        ]);
    }
}
