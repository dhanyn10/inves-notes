<?php

namespace App\Http\Controllers\Keuangan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Pendapatan as Pm;

class Pendapatan extends Controller
{
    public function index()
    {
        $dataPm = Pm::all();
        return view('keuangan.pendapatan', [ 'data' => $dataPm ]);
    }
    public function tambah(Request $request)
    {
        $nama       = $request->input('nama');
        $jenis      = $request->input('jenis');
        $nominal    = $request->input('nominal');

        $create = Pm::create([
            'nama'      => $nama,
            'jenis'     => $jenis,
            'nominal'   => $nominal
        ]);

        if(!$create)
        {
            flash('gagal menambah data pendapatan')->error();
        }
        return redirect()->route('pendapatan');
    }
}
