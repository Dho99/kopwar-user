<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    public function index()
    {
        $users = User::select('*')
            ->where('anggota_id', auth()->user()->anggota_id)
            ->get();
        $pass = User::select('password')
            ->where('anggota_id', auth()->user()->anggota_id)
            ->get('password');

        return view('akun.index', [
            'title' => 'Akun',
            'users' => $users,
            'hash' => Hash::needsRehash($pass)
        ]);
    }

    public function ubah()
    {

        $users = User::select('*')
            ->where('anggota_id', auth()->user()->anggota_id)
            ->get();


        return view('edit.index', [
            'title' => 'Edit',
            'users' => $users,

        ]);
    }

    public function update(Request $request)
    {
        $users = User::where('anggota_id', auth()->user()->anggota_id)
            ->update([
                'username' => $request->username,
                'password' => base64_encode(base64_encode(base64_encode($request->password)))
            ]);
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        return redirect()->route('tampil');
    }
}
