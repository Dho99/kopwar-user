<?php

namespace App\Http\Controllers;

use App\Models\Simpanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SimpananController extends Controller
{
    public function index()
    {
        $simpanan_wajib = DB::table('tbl_simpanan')
            ->where('id_anggota', auth()->user()->anggota_id)
            ->get(['simwa'])
            ->sum(['simwa']);

        $simpanan_pokok = DB::table('tbl_simpanan')
            ->where('id_anggota', auth()->user()->anggota_id)
            ->get(['simpok'])
            ->sum(['simpok']);

        $simpanan_hr = DB::table('tbl_simpanan')
            ->where('id_anggota', auth()->user()->anggota_id)
            ->get(['shr'])
            ->sum(['shr']);

        $simpanan_wisata = DB::table('tbl_simpanan')
            ->where('id_anggota', auth()->user()->anggota_id)
            ->get(['wisata'])
            ->sum(['wisata']);

        $simpanan_umroh = DB::table('tbl_simpanan')
            ->where('id_anggota', auth()->user()->anggota_id)
            ->get(['umroh'])
            ->sum(['umroh']);


        return view('simpanan.index', [
            'title' => 'Simpanan',
            'total_simwa' => $simpanan_wajib,
            'total_simpok' => $simpanan_pokok,
            'total_shr' => $simpanan_hr,
            'total_wisata' => $simpanan_wisata,
            'total_umroh' => $simpanan_umroh,

        ]);
    }
}
