<?php

namespace App\Http\Controllers;

use App\Models\Pinjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PinjamanController extends Controller
{
    public function index(Pinjaman $pinjaman)
    {

        $pinjaman = DB::table('tbl_pinjaman')
            ->where('anggota_id', auth()->user()->anggota_id)
            ->get(['jumlah_pinjaman'])
            ->sum(['jumlah_pinjaman']);

        return view('pinjaman.index', [
            'title' => 'Pinjaman',
            'pinjam' => $pinjaman
        ]);
    }
}
