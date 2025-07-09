<?php

namespace App\Http\Controllers;

class KpiController extends Controller
{
    public function index()
    {
        $kpis = [
            [
                'id' => 1,
                'titulo' => 'Vendas do Dia',
                'valor' => 1280.50,
                'variacao_percentual' => 5.2
            ],
            [
                'id' => 2,
                'titulo' => 'Visitas do Site',
                'valor' => 3421,
                'variacao_percentual' => -3.4
            ],
            [
                'id' => 3,
                'titulo' => 'Novos Usuários',
                'valor' => 28,
                'variacao_percentual' => 12.1
            ],
            [
                'id' => 4,
                'titulo' => 'Pedidos Finalizados',
                'valor' => 56,
                'variacao_percentual' => 2.3
            ]
        ];

        return response()->json($kpis);
    }
}