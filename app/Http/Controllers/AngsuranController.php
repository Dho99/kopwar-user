<?php

namespace App\Http\Controllers;

use App\Models\Angsuran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AngsuranController extends Controller
{
    public function index()
    {

        $angsuran = DB::table('tbl_angsuran')
            ->where('anggota_id', auth()->user()->anggota_id)
            ->get(['jumlah_bayar'])
            ->sum(['jumlah_bayar']);
        $pinjaman = DB::table('tbl_pinjaman')
            ->where('anggota_id', auth()->user()->anggota_id)
            ->get(['jumlah_pinjaman'])
            ->sum(['jumlah_pinjaman']);
        return view('angsuran.index', [
            'title' => 'Angsuran',
            'angsuran' => $angsuran,
            'jumlah' => $pinjaman - $angsuran
        ]);
    }
}
