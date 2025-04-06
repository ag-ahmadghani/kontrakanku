<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penyewa extends Model
{
    use HasFactory;

    protected $fillable = [
        'pembayaran_id',
        'status',
        'tanggal_mulai',
        'tanggal_selesai'
    ];

    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class);
    }

    public function user()
    {
        // Relasi tidak langsung melalui tabel pembayaran
        return $this->hasOneThrough(User::class, Pembayaran::class, 'id', 'id', 'pembayaran_id', 'user_id');
    }

    public function kontrakan()
    {
        // Relasi tidak langsung melalui tabel pembayaran
        return $this->hasOneThrough(Kontrakan::class, Pembayaran::class, 'id', 'id', 'pembayaran_id', 'kontrakan_id');
    }
}
