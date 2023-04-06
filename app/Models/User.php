<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'password',
        'alamat',
        'nip_nisn',
        'tanggal_lahir',
        'no_telepon',
        'role',
        'jurusan',
        'kelas',
        'image'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeFilter($query)
    {
        if (request('search')) {
            return $query->where('nip_nisn', 'like', '%' . request('search') . '%');
        }
    }

    public function uangs()
    {
        return $this->hasMany(Uang::class, 'nip_nisn', 'nip_nisn');
    }

    public function role()
    {
        return $this->hasMany(User::class, 'nip_nisn', 'nip_nisn');
    }
}
