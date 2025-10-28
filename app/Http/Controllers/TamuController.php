<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class TamuController extends Controller
{
    public function form()
    {
        return view('formtamu');
    }
    public function simpan(Request $request)
    {
     Tamu::create([
         'nama' => $request->nama,
         'nomorkamar' => $request->nomorkamar,
         'tanggalcheckin' => $request->tanggalcheckin,
         'tanggalcheckout' => $request->tanggalcheckout,
         'StatusPembayaran' => $request->StatusPembayaran,
     ]);
     return"Data tamu berhasil disimpan";
    }
    public function daftar() {
    $data = Tamu::all();
    return view('tamu', ['tamu' => $data]);
    }
}    
