<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = service::all();

        return view('service.index',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'foto' => 'required|image',
            'title' => 'required',
            'deskripsi' => 'required',
        ]);
    
        $input = $request->all();
    
        if ($foto = $request->file('foto')) {
            $destinationPath = 'gambar/';
            $imageName = $foto->getClientOriginalName(); // Menggunakan nama asli dari file yang diunggah
            $foto->move($destinationPath, $imageName);
            $input['foto'] = $imageName;
        }
        
    
        service::create($input);
    
        return redirect('/service')->with('message', 'Data Berhasil Disimpan');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(service $service)
    {
        // dd($teknisi);
        return view('service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, service $service)
    {
        $request->validate([
            'nama' => 'required',
            'foto' => 'image',
            'title' => 'required',
            'deskripsi' => 'required',
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
        
    
        $service->update($input);
    
        return redirect('/service')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(service $service)
    {
        $service->delete();

        return redirect('/service')->with('message', 'Data Berhasil Dihapus');
    }
}
