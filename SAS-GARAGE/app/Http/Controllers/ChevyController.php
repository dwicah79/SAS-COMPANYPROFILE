<?php

namespace App\Http\Controllers;

use App\Models\partchevy;
use Illuminate\Http\Request;

class ChevyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partchevy = partchevy::all();

        return view('partchevy.index', compact('partchevy'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partchevy.create');
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


        partchevy::create($input);

        return redirect('/partchevy')->with('message', 'Data Berhasil Disimpan');
    }


    /**
     * Display the specified resource.
     */
    public function show(partchevy $partchevy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(partchevy $partchevy)
    {
        // dd($teknisi);
        return view('partchevy.edit', compact('partchevy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, partchevy $partchevy)
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
        } else {
            unset($input['foto']);
        }


        $partchevy->update($input);

        return redirect('/partchevy')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(partchevy $partchevy)
    {
        $partchevy->delete();

        return redirect('/partchevy')->with('message', 'Data Berhasil Dihapus');
    }
}