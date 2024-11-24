<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Coblos</title>
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
        .my-custom-container {
            width: 500px;
            border: 1px solid black;
            height: 100vh;
            width: 500px;
            min-height: 100vh;
            /* display: flex; */
            /* align-items: center; */
            /* justify-content: center; */
            flex-direction: column;
            background-color: black;
            color: white;
            overflow-y: auto;
            position: relative;
        }

        .btn-tambah {
            position: absolute;
            bottom: 30px;
            right: 30px;
        }

        .border-wrap {
            border-radius: 10px;
            border: 1px solid #FEDE58;
        }

        .border-pribadi {
            border-radius: 30px;
            border: 1px solid #FEDE58;
        }

        .total-top {
            color: #FEDE58;
            font-size: 45px;
        }

        .border-data {

            border-bottom: 1px solid #FEDE58;
            border-top: 1px solid #FEDE58;
        }
    </style>

</head>

<body>

    <div class="container my-custom-container">
        <div class="row mb-3">
            <div class="col-12 text-center">
                <form method="POST" action="/auth/koordinators/logout" class="p-3 text-center">Selamat Datang

                    @csrf
                    <h4>{{ Auth::user()->name }}</h4>
                    <button class="btn btn-primary">Logout</button>
                </form>
            </div>

        </div>
        <div class="row mb-3">
            <div class="col-12 px-4">
                <div class="">Total Input Simpatisan</div>
                <div class="p-4 border-wrap">
                    <div class="d-flex justify-content-center align-items-center gap-2">
                        <div class="total-top text-primary">
                            {{ $totalSimpatisan }}
                        </div>
                        <div>Orang</div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div><span class="text-primary">Laki-laki</span> {{ $totalSimpatisanMale }}</div>
                        <div><span class="text-primary">Perempuan</span> {{ $totalSimpatisanFemale }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 px-4">
                <div class="">Total Input Pribadi</div>
                <div class="p-4 border-pribadi">
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2">
                                <div class="total-top text-primary">
                                    {{ $simpatisanByMe }}
                                </div>
                                <div class="">Orang</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex flex-column justify-content-center align-items-center h-100">
                                <div><span class="text-primary">Laki-laki</span> {{ $simpatisanByMeMale }}</div>
                                <div><span class="text-primary">Perempuan</span> {{ $simpatisanByMeFeMale }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="row mb-1">
                <div class="col-12 px-4">Pengambilan Data</div>
            </div>
            @forelse ($simpatisans as $s)
                <div class="row border-data py-4">
                    <div class="col-6 px-4">
                        <div class="text">{{ $s->name }}</div>
                        <div class="text">{{ $s->nik }}</div>
                    </div>
                    <div class="col-6 px-4">
                        <div class="d-flex justify-content-end">{{ date('d-m-Y h:i', strtotime($s->created_at)) }}
                        </div>
                    </div>
                </div>
            @empty
                <p>Belum Ada Anggota</p>
            @endforelse

        </div>

        <a href="/koordinators/create" class="p-4 btn btn-icon btn-pills btn-primary mt-2 btn-tambah">
            <i class="uil uil-0-plus"></i>
            {{-- <svg
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-gitlab icons">
                <path
                    d="M22.65 14.39L12 22.13 1.35 14.39a.84.84 0 0 1-.3-.94l1.22-3.78 2.44-7.51A.42.42 0 0 1 4.82 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.49h8.1l2.44-7.51A.42.42 0 0 1 18.6 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.51L23 13.45a.84.84 0 0 1-.35.94z">
                </path>
            </svg> --}}
        </a>

    </div>
    <!-- Offcanvas End -->

    <!-- javascript -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- simplebar -->
    {{-- <script src="{{ asset('js/simplebar.min.js') }}"></script> --}}
    <!-- Icons -->
    {{-- <script src="{{ asset('js/feather.min.js') }}"></script> --}}
    <!-- Main Js -->
    {{-- <script src="{{ asset('js/plugins.init.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

</body>

</html>
