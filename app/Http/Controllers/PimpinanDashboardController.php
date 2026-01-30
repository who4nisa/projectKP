<?php

namespace App\Http\Controllers;

use App\Models\Aset;

class PimpinanDashboardController extends Controller
{
    public function index()
    {
        // proteksi role pimpinan
        if (auth()->user()->role !== 'user') {
            abort(403);
        }

        return view('user.dashboard', [
            'totalAset' => Aset::count(),
            'asetBaik'  => Aset::where('kondisi', 'Baik')->count(),
            'asetRusak' => Aset::whereIn('kondisi', ['Rusak Ringan', 'Rusak Berat'])->count(),
        ]);
    }
}
