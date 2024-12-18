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
    <link href="{{ asset('css/simplebar.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons -->
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/tabler-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://unicons.iconscout.com/release/v3.0.6/css/line.css" rel="stylesheet">
    <!-- Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />

</head>

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

    <!-- Hero Start -->
    <section class="bg-home bg-circle-gradiant d-flex align-items-center">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form-signin p-4 bg-white rounded shadow">
                        <form method="POST" action="/auth/admins/login">
                            @csrf
                            <h5 class="mb-3 text-center">Masuk Sebagai Admin</h5>

                            <div class="form-floating mb-2">
                                <input type="username" name="username" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control" id="floatingPassword"
                                    placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>

                            {{-- <div class="d-flex justify-content-between">
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                                    </div>
                                </div>
                                <p class="forgot-pass mb-0"><a href="reset-password.html"
                                        class="text-dark small fw-bold">Forgot password ?</a></p>
                            </div> --}}

                            <button class="btn btn-primary w-100" type="submit">Masuk</button>

                            {{-- <div class="col-12 text-center mt-3">
                                <p class="mb-0 mt-3"><small class="text-dark me-2">Don't have an account ?</small> <a
                                        href="signup.html" class="text-dark fw-bold">Sign Up</a></p>
                            </div><!--end col--> --}}

                            <p class="mb-0 text-muted mt-3 text-center">©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- javascript -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- simplebar -->
    <script src="assets/js/simplebar.min.js"></script>
    <!-- Icons -->
    <script src="assets/js/feather.min.js"></script>
    <!-- Main Js -->
    <script src="assets/js/plugins.init.js"></script>
    <script src="assets/js/app.js"></script>




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
