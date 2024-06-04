@extends('layouts.app')
@section('title', 'Dashboard')
@section('data')
<div class="row justify-content-left">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header bg-primary text-white">
                <h5 class="m-0 font-weight-bold">Profil Pengembang</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center mb-md-0 mb-4">
                        <img class="img-fluid rounded-circle shadow" src="{{ asset('template/img/dwi.jpg') }}"
                            alt="Foto Profil" style="max-width: 150px;">
                    </div>
                    <div class="col-md-8">
                        <table class="table table-borderless">
                            <tr>
                                <td style="width: 40%;">Nama Pengembang</td>
                                <td>Dwi Cahyo Nugroho</td>
                            </tr>
                            <tr>
                                <td>Kontak</td>
                                <td>
                                    dwicahyonugroho782@gmail.com<br>
                                    +6282373324547
                                </td>
                            </tr>
                            <tr>
                                <td>Skill</td>
                                <td>
                                    Fullstack Web Developer
                                </td>
                            </tr>
                        </table>
                        <p class="text-center mb-0">Connect with me: <a
                                href="https://www.linkedin.com/in/dwi-cahyo-nugroho-5262a224a/" target="_blank"
                                class="text-primary">Linkedin</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection