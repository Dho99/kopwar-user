<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
    use HasFactory;

    public $table = 'tbl_simpanan';

    protected $guarded = ['id_simpanan'];

    public function simpanan()
    {
        return $this->belongsTo(User::class);
    }
}
