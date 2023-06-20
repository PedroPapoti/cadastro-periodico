<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Periodico;

class PeriodicoController extends Controller
{
    public function index() {

        $periodicos = Periodico::all();

    
        return view('welcome',['periodicos' => $periodicos]); 
           

    }

    public function create() {
        return view('events.create');
    }

    public function store(Request $request) {
        $periodico = new Periodico;

        $periodico->nome = $request->nome;
        $periodico->editora = $request->editora;
        $periodico->valor_assinatura = $request->valor_assinatura;
        $periodico->area_conhecimento = $request->area_conhecimento;

        $periodico->save();

        return redirect('/'); // Redirecionar para a página desejada após o cadastro do periódico
    }
}
