@extends('layouts.app')

@section('title', 'Form Tambah Data')

@section('data')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('teknisi.update',$teknisi->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="" class="col-md-12">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="{{$teknisi->nama}}">
                    @error('nama')
                    <small style="color:red;">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="" class="col-md-12">Jabatan</label>
                    <input type="text" class="form-control" name="role" placeholder="Jabatan (Owner/Teknisi)"value="{{$teknisi->role}}">
                    @error('role')
                    <small style="color:red;">{{$message}}</small>
                    @enderror
                </div>
                <img src="/gambar/{{$teknisi->gambar}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="" class="col-md-12">Foto</label>
                    <input type="file" class="form-control" name="gambar">
                    @error('gambar')
                    <small style="color:red;">{{$message}}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-info">Simpan</button>
                <a href="/teknisi" class="btn btn-primary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
