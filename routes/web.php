<?php

use App\Http\Controllers\KpiController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use Illuminate\Http\Request;

Route::get('/', function () {
    return Inertia::render('welcome');
});

Route::prefix('api')->group(function () {
    Route::get('/kpis', [KpiController::class, 'index']);
    
    Route::post('/login', function (Request $request) {
        $credentials = $request->only('email', 'password');

        if ($credentials['email'] === 'admin@dashboard.com' && $credentials['password'] === 'admin') {
            return response()->json([
                'token' => 'mock-token',
                'user' => [
                    'id' => 1,
                    'name' => 'Admin',
                    'email' => 'admin@dashboard.com'
                ]
            ]);
        }

        return response()->json(['error' => 'Credenciais inválidas'], 401);
    });
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
