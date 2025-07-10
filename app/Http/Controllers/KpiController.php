<?php

namespace App\Http\Controllers;

use App\Models\Kpi;

class KpiController extends Controller
{
    public function index()
    {
        $kpis = Kpi::all();

        return response()->json($kpis);
    }
}