<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angsuran extends Model
{
    use HasFactory;

    public $table = 'tbl_angsuran';
    use HasFactory;

    protected $guarded = ['angsuran_id'];

    public function angsuran()
    {
        return $this->belongsTo(User::class);
    }
}
