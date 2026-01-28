<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aset;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalAset' => Aset::count(),
            'asetBaik'  => Aset::where('kondisi', 'Baik')->count(),
            'asetRusak' => Aset::whereIn('kondisi', ['Rusak Ringan', 'Rusak Berat'])->count(),
        ]);
    }
}
