@extends('layouts.app')

@section('title', 'Form Tambah Data Lokasi')

@section('data')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('location.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="" class="col-md-12">Alamat</label>
                    <input type="text" class="form-control" name="lokasi" placeholder="lokasi">
                    @error('lokasi')
                    <small style="color:red;">{{$message}}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-info">Simpan</button>
                <a href="/location" class="btn btn-primary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection