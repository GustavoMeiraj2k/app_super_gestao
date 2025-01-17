<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => 'xyz',
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => 'xyz',
            ],
        ];

        isset ($fornecedores[1]['cnpj'])? 'cnpj informado': 'cnpj nao informado';
    return view('app.fornecedor.index', compact('fornecedores'));
}
}
