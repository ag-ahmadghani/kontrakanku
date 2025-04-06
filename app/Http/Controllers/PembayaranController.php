<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use App\Models\Kontrakan;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Kontrakan $kontrakan) {}

    /**
     * Show the form for creating a new resource.
     */
    public function create($kontrakanId)
    {
        // Cari kontrakan berdasarkan ID
        $kontrakan = Kontrakan::findOrFail($kontrakanId);

        // Kirim data kontrakan ke view
        return view('pembayaran', compact('kontrakan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kontrakan_id' => 'required',
            'screenshot' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('screenshot')) {
            $screenshot = $request->file('screenshot')->store('images/pembayarans', 'public');
        } else {
            return back()->with('masukan bukti screenshot terlebih dahulu');
        }

        $pembayaran = Pembayaran::create([
            'user_id' => Auth::user()->id,
            'kontrakan_id' => $request->kontrakan_id,
            'screenshot' => $screenshot,
            'status' => 'pending',
        ]);

        // Tambahkan data ke tabel penyewa
        Penyewa::create([
            'pembayaran_id' => $pembayaran->id,
            'status' => 'pending', // Status default
        ]);

        return redirect()->route('kontrakans.index')->with('success', 'Pembayaran berhasil diajukan. Silakan tunggu konfirmasi admin.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
