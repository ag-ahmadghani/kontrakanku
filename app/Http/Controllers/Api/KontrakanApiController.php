<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kontrakan;
use Illuminate\Http\Request;

class KontrakanApiController extends Controller
{
    public function index()
    {
        return Kontrakan::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'harga' => 'required|numeric',
        ]);

        $kontrakan = Kontrakan::create($validated);
        return response()->json($kontrakan, 201);
    }

    public function show($id)
    {
        return Kontrakan::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $kontrakan = Kontrakan::findOrFail($id);
        $kontrakan->update($request->all());
        return response()->json($kontrakan);
    }

    public function destroy($id)
    {
        $kontrakan = Kontrakan::findOrFail($id);
        $kontrakan->delete();
        return response()->json(null, 204);
    }
}
