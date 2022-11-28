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
        // $request->file('image')->store('profile');

        $users = User::where('anggota_id', auth()->user()->anggota_id)
            ->update([
                'username' => $request->username,
                'password' => base64_encode(base64_encode(base64_encode($request->password))),
                'image' => $request->file('image')->store('profile')
            ]);

        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'image' => 'image|file|max:2048'
        ]);
        return redirect()->route('tampil');
    }
}
