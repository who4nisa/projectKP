<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use Illuminate\Support\Facades\Auth;


class PimpinanDashboardController extends Controller
{
    public function index()
    {
    if (Auth::user()->role !== 'user') {
        abort(403);
    }

        return view('user.dashboard', [
            'totalAset' => Aset::count(),
            'asetBaik'  => Aset::where('kondisi', 'Baik')->count(),
            'asetRusak' => Aset::whereIn('kondisi', ['Rusak Ringan', 'Rusak Berat'])->count(),
        ]);
    }
}
