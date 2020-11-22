@extends('shared/base')

@section('judul','.::Home LOGIN::.')

@section('navigasi')
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style='font-size:20px;'>
    <a class="navbar-brand" href="/rahasia">ISB</a>
    <p style='color:white; margin:0;'>Selamat datang, {{$nama}}</p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/secret">Secret</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-warning" href="logout">Logout</a>
            </li>
        </ul>
    </div>
</nav>
@endsection

@section('isi_konten')
<div class="row">
    <div class="col-sm-4">
        <h2>Tentang ISB</h2>
        <h5>Sistem Informasi UC</h5>
        <div class="fakeimg" style='background-color:white'>
            <img src="{{ URL::to('/assets/img/drawing1.png') }}" alt="coba" style='height:200px'>
            
        </div>
        <p></p>
        <h3><span data-toggle="tooltip" title="Some useful links">Tautan</span></h3>
        <p>Media Belajar</p>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="http://uc.ac.id/isb" target='_blank'>ISB</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://w3schools.com" target='_blank'>w3schools.com</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://malasngoding.com" target='_blank'>malasngoding.com</a>
            </li>
        </ul>
        <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
        <h2>Week 09</h2>
        <h5>Development Framework, November 12, 2020</h5>
        <div class="fakeimg" style='height:470px; background-color:white'>
        <img src="{{ URL::to('/assets/img/drawing2.png') }}" alt="coba2" style='width:700px'>
        </div>
        <p>Model-View-Controller</p>
        <p>
            MVC adalah konsep arsitektur dalam pembangunan aplikasi berbasis web yang membagi aplikasi web menjadi 3 bagian besar. Yang mana setiap bagian memiliki tugas-tugas serta tanggung jawab masing-masing. Tiga bagian tersebut adalah: model, view dan controller.
            <br>
            <br>
            <a href='https://jagongoding.com/web/memahami-konsep-mvc/' class='btn btn-success' target='_blank'>Baca Lebih Lanjut</a>
        </p>
        <br>
    </div>
</div>
@endsection

@section('additional_script')
<script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        })
    </script>
@endsection