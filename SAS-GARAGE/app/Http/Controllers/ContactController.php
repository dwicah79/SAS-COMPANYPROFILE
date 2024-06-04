<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = contact::all();

        return view('contact.index',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nomor' =>'required'
        ]);
    
        $input = $request->all();
        contact::create($input);
    
        return redirect('/contact')->with('message', 'Data Berhasil Disimpan');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        // dd($teknisi);
        return view('contact.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        $request->validate([
            'nama' => 'required',
            'nomor' => 'required'
        ]);
    
        $input = $request->all(); 
        $contact->update($input);
        return redirect('/contact')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        $contact->delete();

        return redirect('/contact')->with('message', 'Data Berhasil Dihapus');
    }
}
