<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontrakan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kontrakan',
        'alamat',
        'deskripsi',
        'harga',
        'foto1',
        'foto2',
        'foto3',
        'user_id',
    ];

    protected $casts = [
        'harga' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'kontrakan_id');
    }
}
