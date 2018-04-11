<?php

namespace App\Http\Controllers;

use App\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index()
    {
        $santris = Santri::all();

        return view('santri.index', compact('santris')); //compact data yang mau dikirim ke index.blade
    }

    public function create()
    {
        return view('santri.create');
    }

    public function store(Request $request)
    {
        //this is for validation
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'alamat' => 'required',
            'jenis_kelamin' => 'required', 
        ]);
        // cara 1
        $nama = $request->nama;
        $umur = $request->umur;
        $alamat = $request->alamat;
        $jenis_kelamin = $request->jenis_kelamin;

        //cara 2
        // $data['nama'] = $request->nama;
        // $data['umur'] = $request->umur;
        // $data['alamat'] = $request->alamat;
        // $data['jenis_kelamin'] = $request->jenis_kelamin;
        // Santri::create($data);

        //cara 3
        //Santri::create($request->all()); //tidak bisa digunakan pada keadaan tertentu, hanya membaca input data

        // public function messages()
        // {
        //     return[
        //         'nama.required' => 'Masukkan Nama'
        //     ]
        
        // }

        // return view('santri.create');
        // return redirect()->url('santri/create');
        return redirect()->route('santri.index');
    }
}
