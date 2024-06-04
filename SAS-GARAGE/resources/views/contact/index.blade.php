@extends('layouts.app')

@section('title', 'Data Informasi Kontak')
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
                    <th>Nomor</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach($contact as $contact)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$contact->nama}}</td>
                    <td>{{$contact->nomor}}</td>
                    <td>
                        <div style="display: flex; flex-direction: row;">
                            <a href="{{route('contact.edit',$contact->id)}}" class="btn btn-primary" style="margin-right: 5px;">Edit Data</a>
                            <form action="{{route('contact.destroy',$contact->id)}}" method="POST">
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
    <a href="contact/create" class="btn btn-primary">Tambah Data</a>
</div>
@endsection
