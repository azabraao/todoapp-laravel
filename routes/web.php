<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/tarefas', function () {
    $tarefas = [
        "Estudar Lavarel",
        "Fazer a NAC",
        "Tirar 10 na PS",
        "Dar like no canal do prof",
        "Ir ao mercado",
        "Comprar uma bike",
        "Comprar um Mac"
    ];

    echo "<h1>Tarefas para fazer</h1>";

    echo "<ul>";
        foreach($tarefas as $tarefa) {
            echo "<li> $tarefa </li>";
        }
    echo "</ul>";
});
