<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return  'ola ';
//});

Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal']);

Route::get('/sobreNos',[\App\Http\Controllers\SobreNosController::class,'sobreNos']);

Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato']);
//nome, categoria, assunto, mensagens

Route::get(
    '/contato/{nome}/{categoria_id}', 
    function(
        string $nome = 'desconhecido', 
        int $categoria_id = 1 // 1 - 'informação'
    ) {
     echo "Estamos aqui: $nome - $categoria_id ";
    }
);
//explicação: a rota faz parte de uma aplicação http, 
//sendo ela ligada ao controller, e as modificações feitas na logica do codigo
//vai ser feita na função publica, sendo assim necessário puxar controller pra rota
