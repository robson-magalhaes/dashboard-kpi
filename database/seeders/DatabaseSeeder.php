<?php

namespace Database\Seeders;

use App\Models\Kpi;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@dashboard.com',
            'password' => Hash::make('password')
        ]);

       Kpi::create([
            'titulo' => 'Vendas do Dia',
            'valor' => 1280.50,
            'variacao_percentual' => 5.2
        ]);

        Kpi::create([
            'titulo' => 'Visitas do Site',
            'valor' => 3421,
            'variacao_percentual' => -3.4
        ]);

        Kpi::create([
            'titulo' => 'Novos Usuários',
            'valor' => 28,
            'variacao_percentual' => 12.1
        ]);

        Kpi::create([
            'titulo' => 'Pedidos Finalizados',
            'valor' => 56,
            'variacao_percentual' => 2.3
        ]);
    }
}