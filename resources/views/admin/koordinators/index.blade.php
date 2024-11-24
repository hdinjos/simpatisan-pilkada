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

    <div class="page-wrapper landrick-theme toggled">
        <nav id="sidebar" class="sidebar-wrapper sidebar-dark">
            <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
                <div class="sidebar-brand">
                    <a href="index.html">
                        <img src="{{ asset('images/logo-dark.png') }}" height="24" class="logo-light-mode"
                            alt="">
                        <img src="{{ asset('images/logo-light.png') }}" height="24" class="logo-dark-mode"
                            alt="">
                        <span class="sidebar-colored">
                            <img src="{{ asset('images/logo-light.png') }}" height="24" alt="">
                        </span>
                    </a>
                </div>

                <ul class="sidebar-menu">
                    <li><a href="index.html"><i class="ti ti-home me-2"></i>Summary</a></li>
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
            <ul class="sidebar-footer list-unstyled mb-0">
                <li class="list-inline-item mb-0">
                    <a href="https://1.envato.market/4n73n" target="_blank" class="btn btn-icon btn-soft-light"><i
                            class="ti ti-shopping-cart"></i></a> <small class="text-muted ms-1">Buy Now</small>
                </li>
            </ul>
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
                        <div class="search-bar p-0 d-none d-md-block ms-2">
                            <div id="search" class="menu-search mb-0">
                                <form role="search" method="get" id="searchform" class="searchform">
                                    <div>
                                        <input type="text" class="form-control border rounded" name="s"
                                            id="s" placeholder="Search Keywords...">
                                        <input type="submit" id="searchsubmit" value="Search">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <ul class="list-unstyled mb-0">
                        <li class="list-inline-item mb-0">
                            <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                aria-controls="offcanvasRight">
                                <div class="btn btn-icon btn-soft-light"><i class="ti ti-settings"></i></div>
                            </a>
                        </li>

                        <li class="list-inline-item mb-0 ms-1">
                            <div class="dropdown dropdown-primary">
                                <button type="button" class="btn btn-icon btn-soft-light dropdown-toggle p-0"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="ti ti-bell"></i></button>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                </span>

                                <div class="dropdown-menu dd-menu bg-white shadow rounded border-0 mt-3 p-0"
                                    data-simplebar style="height: 320px; width: 290px;">
                                    <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                                        <h6 class="mb-0 text-dark">Notifications</h6>
                                        <span class="badge bg-soft-danger rounded-pill">3</span>
                                    </div>
                                    <div class="p-3">
                                        <a href="#!"
                                            class="dropdown-item features feature-primary key-feature p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="icon text-center rounded-circle me-2">
                                                    <i class="ti ti-shopping-cart"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-dark title">Order Complete</h6>
                                                    <small class="text-muted">15 min ago</small>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#!"
                                            class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/client/04.jpg"
                                                    class="avatar avatar-md-sm rounded-circle border shadow me-2"
                                                    alt="">
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-dark title"><span
                                                            class="fw-bold">Message</span> from Luis</h6>
                                                    <small class="text-muted">1 hour ago</small>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#!"
                                            class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="icon text-center rounded-circle me-2">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-dark title"><span class="fw-bold">One Refund
                                                            Request</span></h6>
                                                    <small class="text-muted">2 hour ago</small>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#!"
                                            class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="icon text-center rounded-circle me-2">
                                                    <i class="ti ti-truck-delivery"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-dark title">Deliverd your Order</h6>
                                                    <small class="text-muted">Yesterday</small>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#!"
                                            class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/client/15.jpg"
                                                    class="avatar avatar-md-sm rounded-circle border shadow me-2"
                                                    alt="">
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-dark title"><span
                                                            class="fw-bold">Cally</span> started following you</h6>
                                                    <small class="text-muted">2 days ago</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="list-inline-item mb-0 ms-1">
                            <div class="dropdown dropdown-primary">
                                <button type="button" class="btn btn-soft-light dropdown-toggle p-0"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                        src="assets/images/client/05.jpg" class="avatar avatar-ex-small rounded"
                                        alt=""></button>
                                <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3"
                                    style="min-width: 200px;">
                                    <a class="dropdown-item d-flex align-items-center text-dark pb-3"
                                        href="profile.html">
                                        <img src="assets/images/client/05.jpg"
                                            class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="flex-1 ms-2">
                                            <span class="d-block">Cristina Julia</span>
                                            <small class="text-muted">UI / UX Designer</small>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-dark" href="index.html"><span
                                            class="mb-0 d-inline-block me-1"><i class="ti ti-home"></i></span>
                                        Dashboard</a>
                                    <a class="dropdown-item text-dark" href="profile.html"><span
                                            class="mb-0 d-inline-block me-1"><i class="ti ti-settings"></i></span>
                                        Profile</a>
                                    <a class="dropdown-item text-dark" href="email.html"><span
                                            class="mb-0 d-inline-block me-1"><i class="ti ti-mail"></i></span>
                                        Email</a>
                                    <div class="dropdown-divider border-top"></div>
                                    <a class="dropdown-item text-dark" href="lock-screen.html"><span
                                            class="mb-0 d-inline-block me-1"><i class="ti ti-lock"></i></span>
                                        Lockscreen</a>
                                    <a class="dropdown-item text-dark" href="login.html"><span
                                            class="mb-0 d-inline-block me-1"><i class="ti ti-logout"></i></span>
                                        Logout</a>
                                </div>
                            </div>
                        </li>
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
                            <h5 class="mb-0">Koordinator Partisipan</h5>

                            {{-- <nav aria-label="breadcrumb" class="d-inline-block mt-1">
                                <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                                    <li class="breadcrumb-item text-capitalize"><a href="index.html">Landrick</a></li>
                                    <li class="breadcrumb-item text-capitalize active" aria-current="page">Shop</li>
                                </ul>
                            </nav> --}}
                        </div>

                        <div class="mt-4 mt-sm-0">
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#add-product">Tambah</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-4">
                            <div class="table-responsive shadow rounded">
                                <table class="table table-center bg-white mb-0">
                                    <thead>
                                        <tr>
                                            <th class="border-bottom p-3">Invoice No.</th>
                                            <th class="border-bottom p-3" style="min-width: 220px;">Client Name</th>
                                            <th class="text-center border-bottom p-3" style="min-width: 200px;">Phone
                                            </th>
                                            <th class="text-center border-bottom p-3">Amount</th>
                                            <th class="text-center border-bottom p-3" style="min-width: 150px;">
                                                Generate(Dt.)</th>
                                            <th class="text-center border-bottom p-3">Status</th>
                                            <th class="text-end border-bottom p-3" style="min-width: 200px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Start -->
                                        <tr>
                                            <th class="p-3">#d01</th>
                                            <td class="p-3">
                                                <a href="#" class="text-primary">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/client/01.jpg"
                                                            class="avatar avatar-ex-small rounded-circle shadow"
                                                            alt="">
                                                        <span class="ms-2">Howard Tanner</span>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-center p-3">(+12)85-4521-7568</td>
                                            <td class="text-center p-3">$253</td>
                                            <td class="text-center p-3">23th Sept 2021</td>
                                            <td class="text-center p-3">
                                                <div class="badge bg-soft-danger rounded px-3 py-1">
                                                    Unpaid
                                                </div>
                                            </td>
                                            <td class="text-end p-3">
                                                <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                <a href="#" class="btn btn-sm btn-soft-primary ms-2">Print</a>
                                            </td>
                                        </tr>
                                        <!-- End -->

                                        <!-- Start -->
                                        <tr>
                                            <th class="p-3">#d02</th>
                                            <td class="p-3">
                                                <a href="#" class="text-primary">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/client/02.jpg"
                                                            class="avatar avatar-ex-small rounded-circle shadow"
                                                            alt="">
                                                        <span class="ms-2">Wendy Filson</span>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-center p-3">(+12)85-4521-7568</td>
                                            <td class="text-center p-3">$482</td>
                                            <td class="text-center p-3">11th Sept 2021</td>
                                            <td class="text-center p-3">
                                                <div class="badge bg-soft-success rounded px-3 py-1">
                                                    Paid
                                                </div>
                                            </td>
                                            <td class="text-end p-3">
                                                <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                <a href="#" class="btn btn-sm btn-soft-primary ms-2">Print</a>
                                            </td>
                                        </tr>
                                        <!-- End -->

                                        <!-- Start -->
                                        <tr>
                                            <th class="p-3">#d03</th>
                                            <td class="p-3">
                                                <a href="#" class="text-primary">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/client/03.jpg"
                                                            class="avatar avatar-ex-small rounded-circle shadow"
                                                            alt="">
                                                        <span class="ms-2">Faye Bridger</span>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-center p-3">(+12)85-4521-7568</td>
                                            <td class="text-center p-3">$546</td>
                                            <td class="text-center p-3">2nd Sept 2021</td>
                                            <td class="text-center p-3">
                                                <div class="badge bg-soft-danger rounded px-3 py-1">
                                                    Unpaid
                                                </div>
                                            </td>
                                            <td class="text-end p-3">
                                                <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                <a href="#" class="btn btn-sm btn-soft-primary ms-2">Print</a>
                                            </td>
                                        </tr>
                                        <!-- End -->

                                        <!-- Start -->
                                        <tr>
                                            <th class="p-3">#d04</th>
                                            <td class="p-3">
                                                <a href="#" class="text-primary">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/client/04.jpg"
                                                            class="avatar avatar-ex-small rounded-circle shadow"
                                                            alt="">
                                                        <span class="ms-2">Ronald Curtis</span>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-center p-3">(+12)85-4521-7568</td>
                                            <td class="text-center p-3">$154</td>
                                            <td class="text-center p-3">1st Sept 2021</td>
                                            <td class="text-center p-3">
                                                <div class="badge bg-soft-danger rounded px-3 py-1">
                                                    Unpaid
                                                </div>
                                            </td>
                                            <td class="text-end p-3">
                                                <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                <a href="#" class="btn btn-sm btn-soft-primary ms-2">Print</a>
                                            </td>
                                        </tr>
                                        <!-- End -->

                                        <!-- Start -->
                                        <tr>
                                            <th class="p-3">#d05</th>
                                            <td class="p-3">
                                                <a href="#" class="text-primary">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/client/05.jpg"
                                                            class="avatar avatar-ex-small rounded-circle shadow"
                                                            alt="">
                                                        <span class="ms-2">Melissa Hibner</span>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-center p-3">(+12)85-4521-7568</td>
                                            <td class="text-center p-3">$458</td>
                                            <td class="text-center p-3">1st Sept 2021</td>
                                            <td class="text-center p-3">
                                                <div class="badge bg-soft-success rounded px-3 py-1">
                                                    Paid
                                                </div>
                                            </td>
                                            <td class="text-end p-3">
                                                <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                <a href="#" class="btn btn-sm btn-soft-primary ms-2">Print</a>
                                            </td>
                                        </tr>
                                        <!-- End -->

                                        <!-- Start -->
                                        <tr>
                                            <th class="p-3">#d06</th>
                                            <td class="p-3">
                                                <a href="#" class="text-primary">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/client/06.jpg"
                                                            class="avatar avatar-ex-small rounded-circle shadow"
                                                            alt="">
                                                        <span class="ms-2">Randall Case</span>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-center p-3">(+12)85-4521-7568</td>
                                            <td class="text-center p-3">$548</td>
                                            <td class="text-center p-3">28th Aug 2021</td>
                                            <td class="text-center p-3">
                                                <div class="badge bg-soft-success rounded px-3 py-1">
                                                    Paid
                                                </div>
                                            </td>
                                            <td class="text-end p-3">
                                                <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                <a href="#" class="btn btn-sm btn-soft-primary ms-2">Print</a>
                                            </td>
                                        </tr>
                                        <!-- End -->

                                        <!-- Start -->
                                        <tr>
                                            <th class="p-3">#d07</th>
                                            <td class="p-3">
                                                <a href="#" class="text-primary">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/client/07.jpg"
                                                            class="avatar avatar-ex-small rounded-circle shadow"
                                                            alt="">
                                                        <span class="ms-2">Jerry Morena</span>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-center p-3">(+12)85-4521-7568</td>
                                            <td class="text-center p-3">$658</td>
                                            <td class="text-center p-3">25th Aug 2021</td>
                                            <td class="text-center p-3">
                                                <div class="badge bg-soft-danger rounded px-3 py-1">
                                                    Unpaid
                                                </div>
                                            </td>
                                            <td class="text-end p-3">
                                                <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                <a href="#" class="btn btn-sm btn-soft-primary ms-2">Print</a>
                                            </td>
                                        </tr>
                                        <!-- End -->

                                        <!-- Start -->
                                        <tr>
                                            <th class="p-3">#d08</th>
                                            <td class="p-3">
                                                <a href="#" class="text-primary">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/client/08.jpg"
                                                            class="avatar avatar-ex-small rounded-circle shadow"
                                                            alt="">
                                                        <span class="ms-2">Lester McNally</span>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-center p-3">(+12)85-4521-7568</td>
                                            <td class="text-center p-3">$457</td>
                                            <td class="text-center p-3">20th Aug 2021</td>
                                            <td class="text-center p-3">
                                                <div class="badge bg-soft-danger rounded px-3 py-1">
                                                    Unpaid
                                                </div>
                                            </td>
                                            <td class="text-end p-3">
                                                <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                <a href="#" class="btn btn-sm btn-soft-primary ms-2">Print</a>
                                            </td>
                                        </tr>
                                        <!-- End -->

                                        <!-- Start -->
                                        <tr>
                                            <th class="p-3">#d09</th>
                                            <td class="p-3">
                                                <a href="#" class="text-primary">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/client/09.jpg"
                                                            class="avatar avatar-ex-small rounded-circle shadow"
                                                            alt="">
                                                        <span class="ms-2">Christopher Burrell</span>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-center p-3">(+12)85-4521-7568</td>
                                            <td class="text-center p-3">$586</td>
                                            <td class="text-center p-3">15th Aug 2021</td>
                                            <td class="text-center p-3">
                                                <div class="badge bg-soft-success rounded px-3 py-1">
                                                    Paid
                                                </div>
                                            </td>
                                            <td class="text-end p-3">
                                                <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                <a href="#" class="btn btn-sm btn-soft-primary ms-2">Print</a>
                                            </td>
                                        </tr>
                                        <!-- End -->

                                        <!-- Start -->
                                        <tr>
                                            <th class="p-3">#d10</th>
                                            <td class="p-3">
                                                <a href="#" class="text-primary">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/client/10.jpg"
                                                            class="avatar avatar-ex-small rounded-circle shadow"
                                                            alt="">
                                                        <span class="ms-2">Mary Skeens</span>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-center p-3">(+12)85-4521-7568</td>
                                            <td class="text-center p-3">$325</td>
                                            <td class="text-center p-3">10th Aug 2021</td>
                                            <td class="text-center p-3">
                                                <div class="badge bg-soft-danger rounded px-3 py-1">
                                                    Unpaid
                                                </div>
                                            </td>
                                            <td class="text-end p-3">
                                                <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                <a href="#" class="btn btn-sm btn-soft-primary ms-2">Print</a>
                                            </td>
                                        </tr>
                                        <!-- End -->
                                    </tbody>
                                </table>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row text-center">
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
                    </div><!--end row-->
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
                                    </script> Landrick. Design with <i
                                        class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/"
                                        target="_blank" class="text-reset">Shreethemes</a>.
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

</body>

</html>
