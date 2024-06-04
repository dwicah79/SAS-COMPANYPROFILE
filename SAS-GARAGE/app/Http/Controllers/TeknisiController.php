<?php

namespace App\Http\Controllers;

use App\Models\Teknisi;
use Illuminate\Http\Request;

class TeknisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teknisi = Teknisi::all();

        return view('teknisi.index',compact('teknisi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teknisi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'role' => 'required',
            'gambar' => 'required|image',
        ]);
    
        $input = $request->all();
    
        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'gambar/';
            $imageName = $gambar->getClientOriginalName(); // Menggunakan nama asli dari file yang diunggah
            $gambar->move($destinationPath, $imageName);
            $input['gambar'] = $imageName;
        }
        
    
        Teknisi::create($input);
    
        return redirect('/teknisi')->with('message', 'Data Berhasil Disimpan');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Teknisi $teknisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teknisi $teknisi)
    {
        // dd($teknisi);
        return view('teknisi.edit',compact('teknisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teknisi $teknisi)
    {
        $request->validate([
            'nama' => 'required',
            'role' => 'required',
            'gambar' => 'image',
        ]);
    
        $input = $request->all();
    
        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'gambar/';
            $imageName = $gambar->getClientOriginalName(); // Menggunakan nama asli dari file yang diunggah
            $gambar->move($destinationPath, $imageName);
            $input['gambar'] = $imageName;
        }else
        {
            unset($input['gambar']);
        }
        
    
        $teknisi->update($input);
    
        return redirect('/teknisi')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teknisi $teknisi)
    {
        $teknisi->delete();

        return redirect('/teknisi')->with('message', 'Data Berhasil Dihapus');
    }
}
