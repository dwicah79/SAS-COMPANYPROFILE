@extends('layouts.app')

@section('title', 'Form Edit Data Sparepart Vespa')

@section('data')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('partvespa.update',$partvespa->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="" class="col-md-12">Nama Parts</label>
                    <input type="text" class="form-control" name="namaparts" placeholder="Nama Service" value="{{$partvespa->namaparts}}">
                    @error('namaparts')
                    <small style="color:red;">{{$message}}</small>
                    @enderror
                </div>
                <img src="/gambar/{{$partvespa->foto}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="" class="col-md-12">Foto</label>
                    <input type="file" class="form-control" name="foto">
                    @error('foto')
                    <small style="color:red;">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="" class="col-md-12">Link</label>
                    <input type="text" class="form-control" name="link" placeholder="Title Service" value="{{$partvespa->link}}">
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
