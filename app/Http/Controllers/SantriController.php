<?php

namespace App\Http\Controllers;

use App\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function create()
    {
        return view('santri.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());


        $nama = $request->nama;
        $umur = $request->umur;
        $alamat = $request->alamat;
        $jenis_kelamin = $request->jenis_kelamin;
// dd($alamat); 
        Santri::create([
            'nama' => $nama,
            'umur' => $umur,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,                    
        ]);

        // return view('santri.create');
        // return redirect()->url('santri/create');
        return redirect()->route('santri.create');
    }
}
