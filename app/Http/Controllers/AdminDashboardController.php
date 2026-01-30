<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aset;
use Illuminate\Support\Facades\Auth;


class AdminDashboardController extends Controller
{
    public function index()
    {
    if (Auth::user()->role !== 'admin') {
        abort(403);
    }
        return view('admin.dashboard', [
            'totalAset' => Aset::count(),
            'asetBaik'  => Aset::where('kondisi', 'Baik')->count(),
            'asetRusak' => Aset::whereIn('kondisi', ['Rusak Ringan', 'Rusak Berat'])->count(),
        ]);
    }
}
