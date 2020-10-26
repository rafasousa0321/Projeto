<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public $sites = [
        'https://www.jn.pt/',
        'https://www.sapo.pt',
        'https://www.cmjornal.pt',
        'https://www.dn.pt',
        'https://www.expresso.pt',
    ];

    public function index(){
        return view ('index');
    }

    public function noticias(){
        return view ('noticias', ['sites'=>$this->sites]);
    }

    public function empresa(){
        return view ('empresa');
    }

    public function ondeEstamos(){
        return view ('onde-estamos');
    }

    public function contactos(){
        return view ('contactos');
    }

    public function form(){
        return view ('formulario');
    }

    public function enviado(Request $request){
        $nome = $request->nome;
        $morada = $request->morada;
        $datanasc = $request->datanasc;
        $password = $request->password;
        return view('enviado', [
            'nome'=>$nome,
            'morada'=>$morada,
            'datanasc'=>$datanasc,
            'password'=>$password
        ]);
    }
}
