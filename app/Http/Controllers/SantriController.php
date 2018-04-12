<?php

namespace App\Http\Controllers;

use App\Santri;
use Illuminate\Http\Request;
use App\Http\Requests\ErrorFormRequest;


class SantriController extends Controller
{
    public function index()
    {
        $santris = Santri::all();

        return view('santri.index', compact('santris')); //compact data yang mau dikirim ke index.blade
        //Eloquent

        // $santris = DB::table('santris)->get();
        //query builder
    }

    public function create()
    {
        return view('santri.create');
    }

    public function store(ErrorFormRequest $request)
    {
        $data['nama'] = $request->nama;
        $data['umur'] = $request->umur;
        $data['alamat'] = $request->alamat;
        $data['jenis_kelamin'] = $request->jenis_kelamin;
           
        Santri::create($data);
        return redirect()->route('santri.index');
    }
    //$santri->create([
        //     'nama' => $request->nama,
        //     'umur' => $request->umur,
        //     'alamat' => $request->alamat,
        //     'jenis_kelamin' => $request->jenis_kelamin,
        // ]);
        // $nama = $request->nama;
        // $umur = $request->umur;
        // $alamat = $request->alamat;
        // $jenis_kelamin = $request->jenis_kelamin;
             // this is for validation
            // $request->validate([
            //     'nama' => 'required',
            //     'umur' => 'required|integer',
            //     'alamat' => 'required',
            //     'jenis_kelamin' => 'required', 
            // ]);
            // cara 1
        //cara 2
       
        

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
        

    public function show($id)
    {
        $santri = Santri::findOrFail($id);

        return view('santri.show', compact('santri')); //isi compact harus sama dengan $ di atas.
    }

    public function edit($id)
    {
        $santri = Santri::findOrFail($id);

        return view('santri.edit', compact('santri'));
    }

    public function update(Request $request, $id)
    {
        $santri = Santri::findOrFail($id);
        
        $santri->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        
        
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'alamat' => 'required',
            'jenis_kelamin' => 'required', 
        ]);

        // cara 2
        $santri->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

            return redirect()->route('santri.index');
    }// cara 1
        // $santri->nama = $request->nama;
        // $santri->umur = $request->umur;
        // $santri->alamat = $request->alamat;
        // $santri->jenis_kelamin = $request->jenis_kelamin;
        // $santri->save();

        //cara 3
        // $santri->update($request->all());

    public function destroy($id)
    {
        $santri = Santri::findOrFail($id);
        $santri->delete();

        return redirect()->route('santri.index');
    }
}
