<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('judul') - Week 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>Selamat Datang di Indomaret</h1>
        <p>Silahkan cari-cari tapi kalau tidak ada yang dicari, ngadem aja</p>
    </div>

</nav>

  @yield('navigasi')

    <div class="container" style="margin-top:30px">
        @yield('isi_konten')
    </div>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <p>&copy;2020. Masih ISB</p>
    </div>

    <!--styles-->
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel='stylesheet' href='assets/css/fontawesome.min.css'>
    <link rel="stylesheet" href="assets/css/style.css">

    <!--scripts-->
    <script src="assets/js/jquery3.5.1.js"></script>
    <script src="assets/popper/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <!-- <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        })
    </script>-->
    @yield('additional_script')
</body>

</html>
