<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Landrick - Invoice List</title>
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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    <style>
        @media (min-width: 500px) {
            .my-custom-container {
                width: 500px;
                border: 1px solid black;
                height: 100vh;
                /* position: relative; */
            }
        }

        /* .btn-tambah {
            position: absolute;
            bottom: 30px;
            right: 30px;
        } */
    </style>

</head>

<body>

    <div class="container my-custom-container">
        {{-- <div class="row mb-3">
            <div class="col-12 text-centerß">
                <div class="p-3 text-center">Selemat Datang Fariz</div>
            </div>

        </div> --}}
        <form class="row mb-3" method="POST" action="/auth/koordinators/login">
            @csrf
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Username <span class="text-danger">*</span></label>
                    <input name="username" type="text" class="form-control" placeholder="Username :">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Password <span class="text-danger">*</span></label>
                    <input name="password" type="text" type="text" class="form-control" placeholder="Password :">
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <button class="btn btn-primary">Login</button>
            </div>
        </form>

    </div>
    <!-- Offcanvas End -->

    <!-- javascript -->
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
