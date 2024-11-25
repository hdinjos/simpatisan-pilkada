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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Ingin Mengapus Data Ini?
                </div>
                <form method="POST" action="/admins/koordinators/delete" class="modal-footer">
                    @csrf
                    <input name="id" type="text" hidden id="inputDelete" />
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary">Ya</button>
                </form>
            </div>
        </div>
    </div>

    <div class="page-wrapper landrick-theme toggled">
        <nav id="sidebar" class="sidebar-wrapper sidebar-dark">
            <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
                <div class="sidebar-brand text-center">
                    <a href="/admins/koordinators">
                        <span>COBLOS APP</span>
                        {{-- <img src="{{ asset('images/logo-dark.png') }}" height="24" class="logo-light-mode"
                            alt="">
                        <img src="{{ asset('images/logo-light.png') }}" height="24" class="logo-dark-mode"
                            alt="">
                        <span class="sidebar-colored">
                            <img src="{{ asset('images/logo-light.png') }}" height="24" alt="">
                        </span> --}}
                    </a>
                </div>

                <ul class="sidebar-menu">
                    {{-- <li><a href="index.html"><i class="ti ti-home me-2"></i>Summary</a></li> --}}
                    <li><a href="/admins/koordinators"><i class="ti ti-browser me-2"></i>Koordinator Partisipan</a></li>
                    {{-- <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="ti ti-browser me-2"></i>Layouts</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="index-dark.html">Dark Dashboard</a></li>
                                <li><a href="index-rtl.html">RTL Dashboard</a></li>
                                <li><a href="index-rtl-dark.html">Dark RTL Dashboard</a></li>
                                <li><a href="index-sidebar-light.html">Light Sidebar</a></li>
                                <li><a href="index-sidebar-colored.html">Colored Sidebar</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="ti ti-apps me-2"></i>Apps</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="chat.html">Chat</a></li>
                                <li><a href="email.html">Email</a></li>
                                <li><a href="calendar.html">Calendar</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="ti ti-user me-2"></i>User Profile</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="profile-setting.html">Profile Setting</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="ti ti-brand-gravatar me-2"></i>Blog</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="blog.html">Blogs</a></li>
                                <li><a href="blog-detail.html">Blog Detail</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="ti ti-shopping-cart me-2"></i>E-Commerce</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="product-detail.html">Shop Detail</a></li>
                                <li><a href="shop-cart.html">Shopcart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="ti ti-camera me-2"></i>Gallery</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="gallery-one.html">Gallary One</a></li>
                                <li><a href="gallery-two.html">Gallery Two</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="ti ti-file-info me-2"></i>Pages</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="faqs.html">FAQs</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="blank-page.html">Blank Page</a></li>
                                <li><a href="components.html">Components</a></li>
                                <li><a href="privacy.html">Privacy Policy</a></li>
                                <li><a href="terms.html">Term & Condition</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="ti ti-mail-opened me-2"></i>Email Template</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="email-confirmation.html">Confirmation</a></li>
                                <li><a href="email-password-reset.html">Reset Password</a></li>
                                <li><a href="email-alert.html">Alert</a></li>
                                <li><a href="email-invoice.html">Invoice</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="ti ti-file-invoice me-2"></i>Invoice</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="invoice-list.html">Invoice List</a></li>
                                <li><a href="invoice.html">Invoice Preview</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="ti ti-login me-2"></i>Authentication</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="login-cover.html">Login Two</a></li>
                                <li><a href="signup.html">Signup</a></li>
                                <li><a href="signup-cover.html">Signup Two</a></li>
                                <li><a href="reset-password.html">Reset Password</a></li>
                                <li><a href="reset-password-cover.html">Reset Password Two</a></li>
                                <li><a href="lock-screen.html">Lockscreen</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="ti ti-license me-2"></i>Miscellaneous</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="comingsoon.html">Comingsoon</a></li>
                                <li><a href="maintenance.html">Maintenance</a></li>
                                <li><a href="error.html">Error</a></li>
                                <li><a href="thankyou.html">Thank You</a></li>
                            </ul>
                        </div>
                    </li> --}}
                </ul>
                <!-- sidebar-menu  -->
            </div>
            <!-- Sidebar Footer -->
            {{-- <ul class="sidebar-footer list-unstyled mb-0">
                <li class="list-inline-item mb-0">
                    <a href="https://1.envato.market/4n73n" target="_blank" class="btn btn-icon btn-soft-light"><i
                            class="ti ti-shopping-cart"></i></a> <small class="text-muted ms-1">Buy Now</small>
                </li>
            </ul> --}}
            <!-- Sidebar Footer -->
        </nav>
        <!-- sidebar-wrapper  -->

        <!-- Start Page Content -->
        <main class="page-content bg-light">
            <div class="top-header">
                <div class="header-bar d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <a href="#" class="logo-icon me-3">
                            <img src="assets/images/logo-icon.png" height="30" class="small" alt="">
                            <span class="big">
                                <img src="assets/images/logo-dark.png" height="24" class="logo-light-mode"
                                    alt="">
                                <img src="assets/images/logo-light.png" height="24" class="logo-dark-mode"
                                    alt="">
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
                <div class="layout-specing">
                    {{-- <div class="d-md-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Invoice List</h5>

                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                                <li class="breadcrumb-item text-capitalize"><a href="index.html">Landrick</a></li>
                                <li class="breadcrumb-item text-capitalize"><a href="#">Invoice</a></li>
                                <li class="breadcrumb-item text-capitalize active" aria-current="page">List</li>
                            </ul>
                        </nav>
                    </div> --}}

                    <div class="d-md-flex justify-content-between">
                        <div>
                            <h5 class="mb-0">Anggota</h5>

                            {{-- <nav aria-label="breadcrumb" class="d-inline-block mt-1">
                                <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                                    <li class="breadcrumb-item text-capitalize"><a href="index.html">Landrick</a></li>
                                    <li class="breadcrumb-item text-capitalize active" aria-current="page">Shop</li>
                                </ul>
                            </nav> --}}
                        </div>

                        <div class="mt-4 mt-sm-0">
                            <a href="/admins/koordinators/create" class="btn btn-primary">Tambah</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-4">
                            <div class="table-responsive shadow rounded">
                                <table class="table table-center bg-white mb-0">
                                    <thead>
                                        <tr>
                                            <th class="border-bottom p-3">Nama</th>
                                            <th class="border-bottom p-3" style="min-width: 220px;">Nik</th>
                                            <th class="border-bottom p-3" style="min-width: 200px;">Jenis Kelamin
                                            </th>

                                            <th class="border-bottom p-3" style="min-width: 200px;">Wilayah
                                            </th>
                                            <th class="border-bottom p-3" style="min-width: 200px;">Foto Badan/Wajah
                                            </th>
                                            <th class="border-bottom p-3" style="min-width: 200px;">Foto Ktp
                                            </th>
                                            {{-- <th class="border-bottom p-3" style="min-width: 200px;">Aksi
                                            </th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($users as $u)
                                            <tr>
                                                <th class="p-3">{{ $u->name }}</th>
                                                <td class="p-3">{{ $u->nik }}</td>
                                                <td class="p-3">
                                                    @if ($u->gender == 'male')
                                                        Laki-Laki
                                                    @else
                                                        Perempuan
                                                    @endif
                                                </td>
                                                <td class="p-3">{{ Str::title($u->wilayah) }}</td>
                                                <td class="p-3">
                                                    <img width="50px" height="50px"
                                                        src="{{ asset('storage/image_self/' . $u->foto_self) }}" />
                                                </td>
                                                <td class="p-3">
                                                    <img width="50px" height="50px"
                                                        src="{{ asset('storage/image_ktp/' . $u->foto_ktp) }}" />
                                                </td>

                                                {{-- <td class="p-3">
                                                    <img width="50px" height="50px"
                                                        src="{{ asset('storage/foto/' . $u->image) }}" />
                                                </td> --}}
                                                {{-- <td class="p-3">
                                                    <button onclick="deleteData({{ $u->id }})"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        id="btnDelete{{ $u->id }}" data="{{ $u->id }}"
                                                        class="btn btn-sm btn-soft-danger ms-2">Hapus</button>
                                                </td> --}}
                                            </tr>
                                            <!-- End -->
                                        @endforeach




                                    </tbody>
                                </table>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                    {{-- <div class="row text-center">
                        <!-- PAGINATION START -->
                        <div class="col-12 mt-4">
                            <div class="d-md-flex align-items-center text-center justify-content-between">
                                <span class="text-muted me-3">Showing 1 - 10 out of 50</span>
                                <ul class="pagination mb-0 justify-content-center mt-4 mt-sm-0">
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)"
                                            aria-label="Previous">Prev</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#"
                                            aria-label="Next">Next</a></li>
                                </ul>
                            </div>
                        </div><!--end col-->
                        <!-- PAGINATION END -->
                    </div><!--end row--> --}}
                </div>
            </div><!--end container-->

            <!-- Footer Start -->
            <footer class="bg-white shadow py-3">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-sm-start text-center">
                                <p class="mb-0 text-muted">©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>
                                </p>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </footer><!--end footer-->
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
                                        onclick="setTheme('style-dark-rtl')"><img
                                            src="assets/images/demos/dark-rtl.png"
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
                                <li class="d-grid"><a href="../landing/index.html" target="_blank"
                                        class="mt-4"><img src="assets/images/demos/landing.png"
                                            class="img-fluid rounded-md shadow-md d-block" alt=""><span
                                            class="text-muted mt-2 d-block">Landing Demos</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end Style switcher -->
                </div><!--end col-->
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
                <li class="list-inline-item mb-0"><a href="https://shreethemes.in" target="_blank"
                        class="rounded"><i class="ti ti-world align-middle" title="website"></i></a></li>
            </ul><!--end icon-->
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

    <script>
        function deleteData(id) {
            const inputDelete = document.querySelector("#inputDelete");
            inputDelete.value = id;

        }
    </script>

</body>

</html>
