<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $table = 'tbl_anggota';
    protected $primaryKey = 'anggota_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'password',
    ];

    // protected $nullable = [
    //     'anggota_id',
    //     'kode_anggota',
    //     'nama_lengkap',
    //     'tgl_keanggotaan',
    //     'tgl_registrasi',
    //     'status',
    //     'tgl_nonaktif',
    //     'ket_nonaktif',
    //     'updated_at'
    // ];

    protected $guarded = ['anggota_id'];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // protected $hidden = [
    //     'password',
    //     // 'remember_token',
    // ];

    // /**
    //  * The attributes that should be cast.
    //  *
    //  * @var array<string, string>
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    public function users()
    {
        return $this->hasMany(Pinjaman::class);
    }
}
