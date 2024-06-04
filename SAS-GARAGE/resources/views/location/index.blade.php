@extends('layouts.app')

@section('title', 'Data Lokasi Bengkel')
@section('catatan', 'Pastikan Ukuran Gambar panjang dan lebarnya sama agar tidak mempengaruhi layout web')

@section('data')
<div class="container">
    @if($message =  Session::get('message'))
        <div class="alert alert-success" role="alert">
            <strong>Berhasil</strong>
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Alamat</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach($location as $location)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$location->lokasi}}</td>
                    <td>
                        <div style="display: flex; flex-direction: row;">
                            <a href="{{route('location.edit',$location->id)}}" class="btn btn-primary" style="margin-right: 5px;">Edit Data</a>
                            <form action="{{route('location.destroy',$location->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary">Hapus Data</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="location/create" class="btn btn-primary">Tambah Data</a>
</div>
@endsection
