<?php

namespace App\Http\Controllers;

use App\Models\Angsuran;
use App\Models\Simpanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $total_pinjaman = DB::table('tbl_pinjaman')
            ->where('anggota_id', auth()->user()->anggota_id)
            ->get(['jumlah_pinjaman'])
            ->sum(['jumlah_pinjaman']);

        $total_angsuran = DB::table('tbl_angsuran')
            ->where('anggota_id', auth()->user()->anggota_id)
            ->get(['jumlah_bayar'])
            ->sum(['jumlah_bayar']);

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


        return view('dashboard.index', [
            'title' => 'Dashboard',
            'pinjaman' => $total_pinjaman,
            'angsuran' => $total_angsuran,
            'total_simpanan' => $simpanan_pokok + $simpanan_wajib + $simpanan_hr + $simpanan_wisata + $simpanan_umroh,
            'total_piutang' => $total_pinjaman - $total_angsuran
        ]);
    }
}
