<?php

namespace App\Http\Controllers;

use App\Models\Kontrakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class KontrakanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header = 'Kontrakan';
        $id = Auth::user()->id;
        $kontrakans = Kontrakan::where('user_id', $id)->get(); // Hanya milik user yang login
        return view('admin.kontrakan.kontrakan', compact('kontrakans', 'header'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kontrakan = Kontrakan::all();
        return view('admin.kontrakan.tambah', compact('kontrakan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kontrakan = new Kontrakan();
        if ($request->hasFile('foto1')) {
            $foto1 = $kontrakan->foto1 = $request->file('foto1')->store('images/kontrakans', 'public');
        }
        if ($request->hasFile('foto2')) {
            $foto2 = $kontrakan->foto2 = $request->file('foto2')->store('images/kontrakans', 'public');
        }
        if ($request->hasFile('foto3')) {
            $foto3 = $kontrakan->foto3 = $request->file('foto3')->store('images/kontrakans', 'public');
        } else {
            (
                [
                    $foto1 = null,
                    $foto2 = null,
                    $foto3 = null
                ]);
        }
        $add = $kontrakan::create([
            'nama_kontrakan' => $request->nama_kontrakan,
            'alamat' => $request->alamat,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'foto1' => $foto1,
            'foto2' => $foto2,
            'foto3' => $foto3,
            'user_id' => Auth::user()->id
        ]);

        if ($add) {
            return redirect()->route('kontrakan.index')->with('success', 'Kontrakan berhasil ditambahkan.');
        } else {
            return back()->withErrors('error', 'data gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Kontrakan $kontrakan)
    {
        // Ambil data berdasarkan ID
        $kontrakan = Kontrakan::findOrFail($kontrakan->id);

        // Kirim data ke view
        return view('admin.kontrakan.show', compact('kontrakan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kontrakan $kontrakan)
    {
        return view('admin.kontrakan.edit', compact('kontrakan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kontrakan $kontrakan)
    {
        try {
            // Validasi input
            $request->validate([
                'nama_kontrakan' => 'required|string|max:255',
                'alamat' => 'required|string|max:255',
                'deskripsi' => 'required|string',
                'harga' => 'required|integer|min:0',
                'foto1' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'foto2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'foto3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validasi gagal:', $e->errors());
            throw $e;
        }

        // Proses penyimpanan file dan data lain...
        $kontrakan->update([
            'nama_kontrakan' => $request->nama_kontrakan,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'foto1' => $request->hasFile('foto1') ? $request->file('foto1')->store('images/kontrakans', 'public') : $kontrakan->foto1,
            'foto2' => $request->hasFile('foto2') ? $request->file('foto2')->store('images/kontrakans', 'public') : $kontrakan->foto2,
            'foto3' => $request->hasFile('foto3') ? $request->file('foto3')->store('images/kontrakans', 'public') : $kontrakan->foto3,
        ]);

        return redirect()->route('kontrakan.index')->with('success', 'Kontrakan berhasil diperbarui.');
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kontrakan $kontrakan)
    {
        // Ambil data kontrakan berdasarkan ID
        $kontrakan = Kontrakan::findOrFail($kontrakan->id);

        // Hapus file foto jika ada
        if ($kontrakan->foto1) {
            Storage::disk('public')->delete($kontrakan->foto1);
        }
        if ($kontrakan->foto2) {
            Storage::disk('public')->delete($kontrakan->foto2);
        }
        if ($kontrakan->foto3) {
            Storage::disk('public')->delete($kontrakan->foto3);
        }

        // Hapus data dari database
        $kontrakan->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('kontrakan.index')->with('success', 'Kontrakan berhasil dihapus.');
    }

    public function public_show(Request $request)
    {

        $status = $request->query('status', 'ready'); // Default ke 'ready'
        $userId = Auth::id(); // Mendapatkan ID user yang sedang login

        if ($status === 'status') {
            // Kontrakan yang sudah memiliki pembayaran oleh user login
            $kontrakans = Kontrakan::whereHas('pembayaran', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })->with('pembayaran')->get();
        } else {
            // Kontrakan yang belum memiliki pembayaran
            $kontrakans = Kontrakan::whereDoesntHave('pembayaran')->with('pembayaran')->get();
        }

        return view('kontrakan', compact('kontrakans', 'status'));
    }

    public function kontrakan_detail(Kontrakan $kontrakan, $id)
    {
        // Ambil data kontrakan berdasarkan ID
        $kontrakan = Kontrakan::findOrFail($id);
        return view('single-post', compact('kontrakan'));
    }
}
