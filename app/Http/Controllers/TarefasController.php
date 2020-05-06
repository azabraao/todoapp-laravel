<?php 

namespace App\Http\Controllers;

class TarefasController {

  public function index() {
    $tarefas = [
        "Estudar Lavarel",
        "Fazer a NAC",
        "Tirar 10 na PS",
        "Dar like no canal do prof",
        "Ir ao mercado",
        "Comprar uma bike",
        "Comprar um Mac"
    ];
    
    return view('tarefas.index', compact('tarefas'));
  }
}