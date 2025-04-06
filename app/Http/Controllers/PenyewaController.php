<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class PenyewaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header = 'Penyewa';
        if (Auth::user()->role === 'admin') {
            $penyewa = Penyewa::whereHas('pembayaran.kontrakan.user', function ($query) {
                $query->where('id', Auth::user()->id);
            })->with(['pembayaran.kontrakan.user'])->get();
            return view('admin.penyewa.penyewa', compact('penyewa', 'header'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penyewa = Penyewa::where('id', $id)->with(['pembayaran', 'user', 'kontrakan'])->first();
        // dd($penyewa);
        return view('admin.penyewa.show', compact('penyewa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'status' => 'required|in:pending,aktif,ditolak',
        ]);

        $penyewa = Penyewa::findOrFail($id);

        $tanggalMulai = now();

        $penyewa->update([
            'status' => $request->status
        ]);

        if ($penyewa->status === "aktif") {
            $penyewa->update([
                'tanggal_mulai' => $tanggalMulai,
                'tanggal_selesai' => Carbon::parse($tanggalMulai)->addMonth()
            ]);
        }

        return redirect()->route('penyewa.index')->with('success', 'Status pembayaran berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
