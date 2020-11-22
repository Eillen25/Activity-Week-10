@extends('shared/base')

@section('judul','.::Register::.')

@section('navigasi')
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="/">ISB</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>
@endsection

@section('isi_konten')

<div class="row">
            <div class="col-md-4 hidden-xs">
            
            </div>
            <div class="col-md-4 col-xs-12 cc_cursor">
                <h3>Pendaftaran</h3>
                <form action="/proses" method="POST">
                    <label for="Username">Nama Lengkap</label>
                    <input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap">
                    <label for="Username">Negara Asal</label>
                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="negara_asal" id="negara_asal" data-select2-id="negara_asal" tabindex="-1" aria-hidden="true">
                        <option selected="selected" data-select2-id="2">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Indonesia</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                    </select>
                    <hr>
                    <label for="Username">Username</label>
                    <input class="form-control cc_cursor" type="text" name="nama_user" id="nama_user">
                    <label for="Username">Password</label>
                    <input class="form-control" type="password" name="kata_sandi" id="kata_sandi">
                    <br>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-edit"></i> Daftar
                    </button>
                    <button type="reset" class="btn btn-secondary">
                        <i class="fa fa-trash"></i> Batal
                    </button>
                    <a href="/login">Sudah punya akun?</a>
                </form>
            </div>
            <div class="col-md-4 hidden-xs cc_cursor">
            
            </div>
        </div>
        <div class="row cc_cursor">
            &nbsp;
        </div>

@endsection

@section('additional_script')
<script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();

            //Initialize Select2 Elements
            $('.select2').select2()
        })
    </script>
@endsection