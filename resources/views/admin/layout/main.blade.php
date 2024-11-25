<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title id="title"></title>
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
    <link href="{{ asset('css/simplebar.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons -->
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/tabler-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://unicons.iconscout.com/release/v3.0.6/css/line.css" rel="stylesheet">
    <!-- Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

</head>

<style>
    body {
        background-color: #000 !important;
        /* background-image: url('vi.png'); */
        /* Menunjukkan gambar sebagai background */
        background-repeat: no-repeat;
        /* Mencegah gambar background diulang */
        background-size: 90%;
        /* Menyesuaikan ukuran gambar agar menutupi seluruh layar */
        background-position: center;
        /* color: #fff; */
        font-family: Arial, sans-serif;
    }
</style>

<body>
    <!-- Loader -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
    <!-- Loader -->

    <div class="page-wrapper landrick-theme toggled">

        <!-- sidebar  -->
        @include('admin.layout.sidebar')

        <!-- Start Page Content -->
        <main class="page-content bg-light">
            <div class="top-header">
                <div class="header-bar d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <a href="#" class="logo-icon me-3">
                            <img src="assets/images/logo-icon.png" height="30" class="small" alt="">
                            <span class="big">
                                <img src="assets/images/logo-dark.png" height="24" class="logo-light-mode" alt="">
                                <img src="assets/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
                            </span>
                        </a>
                        <a id="close-sidebar" class="btn btn-icon btn-soft-light" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>

                    </div>

                    <ul class="list-unstyled mb-0">
                        <div class="d-flex align-items-center">
                            <span>{{ Auth::user()->name }},</span>
                            <form method="POST" action="/auth/admins/logout" class="p-3 text-center">
                                @csrf
                                <button type="submit" class="dropdown-item text-dark"><span
                                        class="mb-0 d-inline-block me-1"><i class="ti ti-logout"></i></span>
                                    Logout</button>
                            </form>
                        </div>
                    </ul>
                </div>
            </div>

            <div class="container-fluid">
                @yield('admin-content')
            </div>
            <!--end container-->

            @include('admin.layout.footer')
            <!-- End -->
        </main>
        <!--End page-content" -->
    </div>
    <!-- page-wrapper -->

    <!-- Offcanvas Start -->
    <div class="offcanvas offcanvas-end bg-white shadow" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasRightLabel" class="mb-0">
                <img src="assets/images/logo-dark.png" height="24" class="light-version" alt="">
                <img src="assets/images/logo-light.png" height="24" class="dark-version" alt="">
            </h5>
            <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas"
                aria-label="Close"><i class="mdi mdi-close fs-4"></i></button>
        </div>
        <div class="offcanvas-body p-4 px-md-5">
            <div class="row">
                <div class="col-12">
                    <!-- Style switcher -->
                    <div id="style-switcher">
                        <div>
                            <ul class="text-center list-unstyled mb-0">
                                <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light"
                                        onclick="setTheme('style-rtl')"><img src="assets/images/demos/rtl.png"
                                            class="img-fluid rounded-md shadow-md d-block" alt=""><span
                                            class="text-muted mt-2 d-block">RTL Version</span></a></li>
                                <li class="d-grid"><a href="javascript:void(0)" class="ltr-version t-ltr-light"
                                        onclick="setTheme('style')"><img src="assets/images/demos/ltr.png"
                                            class="img-fluid rounded-md shadow-md d-block" alt=""><span
                                            class="text-muted mt-2 d-block">LTR Version</span></a></li>
                                <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark"
                                        onclick="setTheme('style-dark-rtl')"><img src="assets/images/demos/dark-rtl.png"
                                            class="img-fluid rounded-md shadow-md d-block" alt=""><span
                                            class="text-muted mt-2 d-block">RTL Version</span></a></li>
                                <li class="d-grid"><a href="javascript:void(0)" class="dark-ltr-version t-ltr-dark"
                                        onclick="setTheme('style-dark')"><img src="assets/images/demos/dark.png"
                                            class="img-fluid rounded-md shadow-md d-block" alt=""><span
                                            class="text-muted mt-2 d-block">LTR Version</span></a></li>
                                <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4"
                                        onclick="setTheme('style-dark')"><img src="assets/images/demos/dark.png"
                                            class="img-fluid rounded-md shadow-md d-block" alt=""><span
                                            class="text-muted mt-2 d-block">Dark Version</span></a></li>
                                <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4"
                                        onclick="setTheme('style')"><img src="assets/images/demos/ltr.png"
                                            class="img-fluid rounded-md shadow-md d-block" alt=""><span
                                            class="text-muted mt-2 d-block">Light Version</span></a></li>
                                <li class="d-grid"><a href="../landing/index.html" target="_blank" class="mt-4"><img
                                            src="assets/images/demos/landing.png"
                                            class="img-fluid rounded-md shadow-md d-block" alt=""><span
                                            class="text-muted mt-2 d-block">Landing Demos</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end Style switcher -->
                </div>
                <!--end col-->
            </div>
        </div>

        <div class="offcanvas-footer p-3 border-top text-center">
            <ul class="list-unstyled social-icon mb-0">
                <li class="list-inline-item mb-0"><a href="https://1.envato.market/4n73n" target="_blank"
                        class="rounded"><i class="ti ti-shopping-cart align-middle" title="Buy Now"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank"
                        class="rounded"><i class="ti ti-brand-dribbble align-middle" title="dribbble"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank"
                        class="rounded"><i class="ti ti-brand-facebook align-middle" title="facebook"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/" target="_blank"
                        class="rounded"><i class="ti ti-brand-instagram align-middle" title="instagram"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes" target="_blank"
                        class="rounded"><i class="ti ti-brand-twitter align-middle" title="twitter"></i></a></li>
                <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i
                            class="ti ti-mail align-middle" title="email"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://shreethemes.in" target="_blank" class="rounded"><i
                            class="ti ti-world align-middle" title="website"></i></a></li>
            </ul>
            <!--end icon-->
        </div>
    </div>
    <!-- Offcanvas End -->

    <!-- javascript -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- simplebar -->
    <script src="{{ asset('js/simplebar.min.js') }}"></script>
    <!-- Icons -->
    <script src="{{ asset('js/feather.min.js') }}"></script>
    <!-- Main Js -->
    <script src="{{ asset('js/plugins.init.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
