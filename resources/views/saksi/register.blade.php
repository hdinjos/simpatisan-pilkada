<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Coblos - Saksi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Admin Dashboard Template" />
    <meta name="keywords" content="Saas, CRM, Admin, Dashboard, Modern, Classic" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="Version" content="v3.8.0" />
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- simplebar -->
    {{-- <link href="{{ asset('css/simplebar.css') }}" rel="stylesheet" type="text/css" /> --}}

    <!-- Icons -->
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/tabler-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://unicons.iconscout.com/release/v3.0.6/css/line.css" rel="stylesheet">
    <!-- Css -->
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    <style>
        /* @media only screen and (min-width: 0px) { */

        .my-custom-container {
            min-height: 100vh;
            max-width: 540px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: white;
            overflow-y: auto;
            /* opacity: 0.1; */
            background-color: black;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-image: url({{ asset('images/bg-jos.png') }});
        }

        /* } */
    </style>

</head>

<body>

    <div class="container-sm my-custom-container">
        {{-- <div class="row mb-3">
            <div class="col-12 text-centerß">
                <div class="p-3 text-center">Selemat Datang Fariz</div>
            </div>

        
        </div> --}}
        <h3 class="text-primary">Selamat Datang </h3>
        <p>Isi Data Saksi</p>
        <form class="row mb-3" method="POST" action="/saksi">
            @csrf
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">NIK <span class="text-danger">*</span></label>
                    <input required name="nik" type="number" class="form-control" placeholder="NIK :">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Nama <span class="text-danger">*</span></label>
                    <input required name="name" type="text" class="form-control" placeholder="Name :">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Nomor HP <span class="text-danger">*</span></label>
                    <input required name="phone" type="number" class="form-control" placeholder="Nomor HP :">
                </div>
            </div>

            <div class="d-flex justify-content-center mt-2">
                <button class="text-black btn btn-primary w-100">Daftar</button>
            </div>
            {{-- <div class="d-flex justify-content-center mt-5">
                <a href="/ceknik/saksi" class="btn btn-danger w-100">Jika NIK Sudah Terdaftar</a>
            </div> --}}
        </form>

    </div>
    <!-- Offcanvas End -->

    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (\Session::has('nik_terdaftar'))
            Swal.fire("NIK sudah terdaftar");
        @endif
    </script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- simplebar -->
    {{-- <script src="{{ asset('js/simplebar.min.js') }}"></script> --}}
    <!-- Icons -->
    {{-- <script src="{{ asset('js/feather.min.js') }}"></script> --}}
    <!-- Main Js -->
    <script src="{{ asset('js/plugins.init.js') }}"></script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

</body>

</html>
