<?php

namespace App\Http\Controllers;
use App\Models\partchevy;
use App\Models\partvespa;
use App\Models\Teknisi;
use App\Models\service;
use App\Models\location;
use App\Models\contact;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $teknisi = Teknisi::all();
        $service = service::all();
        $partvespa = partvespa::all();
        $location = location::all();
        $contact = contact::all();
        $partchevy = partchevy::all();
        return view('home.index',compact('teknisi','service','partvespa','location','contact','partchevy'));
    }

    public function about()
    {
        $location = location::all();
        return view('home.about',compact('location'));
    }

    public function kontak()
    {
        $location = location::all();
        $contact = contact::all();
        return view('home.contact',compact('location','contact'));
    }

    public function service()
    {
        $service = service::all();
        $location = location::all();
        return view('home.service',compact('service','location'));
    }

    public function team()
    {
        $teknisi = Teknisi::all();
        $location = location::all();
        return view('home.team',compact('teknisi','location'));
    }

    public function partvespa()
    {
        $partvespa = partvespa::all();
        $location = location::all();
        return view('home.partvespa',compact('partvespa','location'));
    }


    //untuk chevrolet
    public function partchevy()
    {
        $location = location::all();
        $partchevy = partchevy::all();
        return view('home.part',compact('location','partchevy'));
    }
}
