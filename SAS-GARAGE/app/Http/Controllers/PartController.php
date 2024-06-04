<?php

namespace App\Http\Controllers;

use App\Models\partvespa;
use Illuminate\Http\Request;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partvespa = partvespa::all();

        return view('partvespa.index',compact('partvespa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partvespa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaparts' => 'required',
            'foto' => 'required|image',
            'link' => 'required',
        ]);
    
        $input = $request->all();
    
        if ($foto = $request->file('foto')) {
            $destinationPath = 'gambar/';
            $imageName = $foto->getClientOriginalName(); // Menggunakan nama asli dari file yang diunggah
            $foto->move($destinationPath, $imageName);
            $input['foto'] = $imageName;
        }
        
    
        partvespa::create($input);
    
        return redirect('/partvespa')->with('message', 'Data Berhasil Disimpan');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(partvespa $partvespa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(partvespa $partvespa)
    {
        // dd($teknisi);
        return view('partvespa.edit',compact('partvespa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, partvespa $partvespa)
    {
        $request->validate([
            'namaparts' => 'required',
            'foto' => 'image',
            'link' => 'required',
        ]);
    
        $input = $request->all();
    
        if ($foto = $request->file('foto')) {
            $destinationPath = 'gambar/';
            $imageName = $foto->getClientOriginalName(); // Menggunakan nama asli dari file yang diunggah
            $foto->move($destinationPath, $imageName);
            $input['foto'] = $imageName;
        }else
        {
            unset($input['foto']);
        }
        
    
        $partvespa->update($input);
    
        return redirect('/partvespa')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(partvespa $partvespa)
    {
        $partvespa->delete();

        return redirect('/partvespa')->with('message', 'Data Berhasil Dihapus');
    }
}