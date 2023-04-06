<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uang extends Model
{
    use HasFactory;

    protected $table = 'uangs';

    protected $fillable = [
        'tanggal',
        'nip_nisn',
        'pemasukan',
        'pengeluaran',
        'admin',
    ];
    public function scopeFilter($query)
    {
        if (request('search')) {
            return $query->where('nip_nisn', 'like', '%' . request('search') . '%');
        }
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'nip_nisn', 'nip_nisn');
    }
}
