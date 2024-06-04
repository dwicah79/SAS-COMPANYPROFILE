@extends('layouts.app')

@section('title', 'Form Tambah Spareparts')

@section('data')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('partvespa.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="" class="col-md-12">namaparts</label>
                    <input type="text" class="form-control" name="namaparts" placeholder="Nama Parts">
                    @error('namaparts')
                    <small style="color:red;">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="" class="col-md-12">foto</label>
                    <input type="file" class="form-control" name="foto">
                    @error('foto')
                    <small style="color:red;">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="" class="col-md-12">link</label>
                    <input type="text" class="form-control" name="link" placeholder="Link E-commerce">
                    @error('link')
                    <small style="color:red;">{{$message}}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-info">Simpan</button>
                <a href="/partvespa" class="btn btn-primary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection