<?php

namespace App\Http\Controllers;

use App\Models\location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $location = location::all();

        return view('location.index',compact('location'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'lokasi' => 'required',
        ]);
    
        $input = $request->all();
        location::create($input);
    
        return redirect('/location')->with('message', 'Data Berhasil Disimpan');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(location $location)
    {
        // dd($teknisi);
        return view('location.edit',compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, location $location)
    {
        $request->validate([
            'lokasi' => 'required',
        ]);
    
        $input = $request->all(); 
        $location->update($input);
        return redirect('/location')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(location $location)
    {
        $location->delete();

        return redirect('/location')->with('message', 'Data Berhasil Dihapus');
    }
}