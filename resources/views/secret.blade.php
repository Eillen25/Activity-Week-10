@extends('shared/base')

@section('judul','_=_Secret_=_')

@section('navigasi')
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style='font-size:20px;'>
    <a class="navbar-brand" href="/rahasia">ISB</a>
    <p style='color:white; margin:0;'>Selamat datang {{$nama}} di tempat rahasia</p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/rahasia">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-warning" href="logout">Logout</a>
            </li>
        </ul>
    </div>
</nav>
@endsection

@section('isi_konten')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card mt-5">
                <div class="card-body">
                    <h3>Selamat Datang</h3>
                   
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td style="width:150px">Nama</td>
                            <td>{{ $nama }}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>Mahasiswa Teladan - Telat datang pulang duluan</td>
                        </tr>
                        
                    </table>

                    <a href="/rahasia" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection