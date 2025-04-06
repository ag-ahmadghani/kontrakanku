<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'kontrakan_id',
        'screenshot'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kontrakan()
    {
        return $this->belongsTo(Kontrakan::class, 'kontrakan_id');
    }

    public function penyewa()
    {
        return $this->hasOne(Penyewa::class);
    }
}
