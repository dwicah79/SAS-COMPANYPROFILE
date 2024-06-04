@extends('layouts.app')

@section('title', 'Data Teknisi/Owner')
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
                    <th>Nama</th>
                    <th>Foto</th>
                    <th>Title</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach($service as $service)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$service->nama}}</td>
                    <td>
                    <img src="{{ asset('gambar/' . $service->foto) }}" alt="" class="img-fluid" style="max-width: 100px;">
                    </td>
                    <td>{{$service->title}}</td>
                    <td>{{$service->deskripsi}}</td>
                    <td>
                        <div style="display: flex; flex-direction: row;">
                            <a href="{{route('service.edit',$service->id)}}" class="btn btn-primary" style="margin-right: 5px;">Edit Data</a>
                            <form action="{{route('service.destroy',$service->id)}}" method="POST">
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
    <a href="service/create" class="btn btn-primary">Tambah Data</a>
</div>
@endsection
