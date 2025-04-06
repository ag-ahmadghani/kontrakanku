<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use App\Models\Kontrakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $header = 'Dashboard';
        if (Auth::user()->role === 'admin') {
            $kontrakan = Kontrakan::where('user_id', Auth::user()->id);
            $penyewa = Penyewa::whereHas('pembayaran.kontrakan.user', function ($query) {
                $query->where('id', Auth::user()->id);
            })->with(['pembayaran.kontrakan.user'])->get();
            $penyewa_aktif = $penyewa->where('status', 'aktif');
            return view('admin.dashboard', compact('penyewa', 'kontrakan', 'header', 'penyewa_aktif'));
        }
    }
}
