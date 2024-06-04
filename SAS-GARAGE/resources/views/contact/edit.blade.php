@extends('layouts.app')

@section('title', 'Form Tambah Data')

@section('data')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('contact.update',$contact->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="" class="col-md-12">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="{{$contact->nama}}">
                    @error('nama')
                    <small style="color:red;">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="" class="col-md-12">Nomor Telepon</label>
                    <input type="text" class="form-control" name="nomor" placeholder="Nomor Telp"value="{{$contact->nomor}}">
                    @error('nomor')
                    <small style="color:red;">{{$message}}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-info">Simpan</button>
                <a href="/contact" class="btn btn-primary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
