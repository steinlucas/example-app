<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoaController extends Controller
{

    public function index(){
        return view('index');
    }

    public function gravarDados(Request $request) {
        $nome = $request->nome;
        $email = $request->email;
        $genero = $request->genero;
        $curso = $request->curso;
        $endereco = $request->endereco;
        $cep = $request->cep;
        $municipio = $request->municipio;
        $estado = $request->estado;

        $resultado = 'sucesso';

        return redirect()->route('index')->with(
            ['resultado' => $resultado]
        );
    }
}
