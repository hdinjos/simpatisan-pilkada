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
            border: 1px solid black;
            height: 100vh;
            min-height: 100vh;
            max-width: 540px;
            position: relative;
            flex-direction: column;
            color: white;
            overflow-y: auto;
            background-color: black;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-image: url({{ asset('images/bg-jos.png') }});
        }



        .btn-tambah {
            position: fixed;
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

        .user {
            color: #FEDE58;
            font-size: 20px;
            line-height: 15px;
            font-weight: bold;
        }

        .menu {
            border: 1px solid #FEDE58;
        }

        .custom-card {
            /* border: 1px solid #FEDE58; */
            border-radius: 10px;
        }

        .border-custom-card {
            border-bottom: 1px solid #FEDE58
        }

        .tps {
            padding: 15px 0;
            font-size: 25px;
            color: #FEDE58;
        }

        .paslon {
            padding: 10px 30px;

        }

        .number-input {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .number-input button {
            padding: 5px 10px;
            font-size: 16px;
            cursor: pointer;
        }

        .number-input input {
            width: 75px;
            text-align: center;
            font-size: 16px;
            margin: 0 5px;
        }

        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>

</head>

<body>

    <div class="container-sm my-custom-container">
        <div class="row mt-3 mb-3">
            <div class="d-flex justify-content-between mb-2">

                <div>
                    <div>
                        Selamat Datang,
                        <div class="user">{{ Auth::user()->name }}</div>
                    </div>
                </div>

                <form method="POST" action="/auth/koordinators/logout" class="text-center">
                    @csrf
                    {{-- <button class="btn btn-primary">Logout</button> --}}
                    <li class="list-inline-item mb-0 ms-1">
                        <div class="dropdown dropdown-primary">
                            <a href="#" class="btn btn-outline-primary" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="ti ti-menu-2"></i> Menu
                            </a>

                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-black shadow menu mt-3 py-3"
                                style="min-width: 200px">
                                {{-- <a class="dropdown-item d-flex align-items-center text-dark pb-3" href="profile.html">
                                    <img src="assets/images/client/05.jpg"
                                        class="avatar avatar-md-sm rounded-circle border shadow" alt="" />
                                    <div class="flex-1 ms-2">
                                        <span class="d-block">Cristina Julia</span>
                                        <small class="text-muted">UI / UX Designer</small>
                                    </div>
                                </a> --}}

                                {{-- <div class="dropdown-divider border-top"></div>  --}}
                                <a class="dropdown-item text-white"
                                    href="/koordinators/{{ Auth::user()->id }}/tps"><span
                                        class="mb-0 d-inline-block me-1"><i class="ti ti-box"></i></span>
                                    TPS</a>
                                <button type="submit" class="dropdown-item text-white"><span
                                        class="mb-0 d-inline-block me-1"><i class="ti ti-logout"></i></span>
                                    Logout</button>
                            </div>
                        </div>
                    </li>
                </form>

            </div>
            <div id="dateUser" class="col-12 text-center">
            </div>

        </div>
        {{-- <div class="row mb-3">
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
        </div> --}}
        <div>

            <div class="row mb-1">
                <div class="col-12 px-4">Tambah Hasil Perolehan Suara</div>
            </div>


            <div class="row">
                <div class="col-12 px-4">
                    <div class="custom-card">
                        <form method="POST" action="/koordinators/{{ Auth::user()->id }}/tps"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row text-center">
                                <div class="col-12 mb-3">
                                    <label class="form-label">Nama TPS<span class="text-danger">*</span></label>
                                    <input name="nama_tps" id="name" type="text" required class="form-control"
                                        placeholder="Nama TPS">
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label">Jumlah Suara Paslon 1<span
                                            class="text-danger">*</span></label>
                                    <div class="col-12 number-input">
                                        <button type="button" class="btn btn-danger decrement">-</button>
                                        <input class="form-control number" type="number" name="paslon1" id="paslon1"
                                            value="0" min="0" readonly>
                                        <button type="button" class="btn btn-success increment">+</button>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label">Jumlah Suara Paslon 2<span
                                            class="text-danger">*</span></label>
                                    <div class="col-12 number-input">
                                        <button type="button" class="btn btn-danger decrement">-</button>
                                        <input class="form-control number" type="number" name="paslon2"
                                            id="paslon2" value="0" min="0" readonly>
                                        <button type="button" class="btn btn-success increment">+</button>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label">Jumlah Suara Tidak Sah<span
                                            class="text-danger">*</span></label>
                                    <div class="col-12 number-input">
                                        <button type="button" class="btn btn-danger decrement">-</button>
                                        <input class="form-control number" type="number" name="tidak_sah"
                                            id="tidak_sah" value="0" min="0" readonly>
                                        <button type="button" class="btn btn-success increment">+</button>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label">Foto C1<span class="text-danger">*</span></label>
                                    <input name="c1" id="name" type="file" accept=".png, .jpeg, .jpg"
                                        required class="form-control" placeholder="Nama TPS">
                                </div>
                                <div class="col-12 mb-1 d-flex gap-3" style="text-align: right">
                                    <a href="/koordinators/{{ Auth::user()->id }}/tps"
                                        class="btn btn-primary w-50">Kembali</a>
                                    <button type="submit" class="btn btn-primary w-50">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            {{-- @forelse ($simpatisans as $s)
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
            @endforelse --}}

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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <!-- simplebar -->
    {{-- <script src="{{ asset('js/simplebar.min.js') }}"></script> --}}
    <!-- Icons -->
    {{-- <script src="{{ asset('js/feather.min.js') }}"></script> --}}
    <!-- Main Js -->
    {{-- <script src="{{ asset('js/plugins.init.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Augustus", "September",
            "Oktober", "November", "Desember"
        ];

        const d = new Date();
        let date = d.getDate()
        let month = months[d.getMonth()];
        let year = d.getFullYear();

        let fullDate = `${date}, ${month} ${year}`
        const dateUser = document.querySelector("#dateUser");
        dateUser.innerHTML = fullDate;

        @if (\Session::has('success'))
            Swal.fire("Tambah Data Berhasil");
        @endif

        $('#title').html('Tambah TPS')

        $(document).ready(function() {
            const $input = $('.number');

            // Handle increment
            $('.increment').on('click', function() {
                const $input = $(this).siblings('.number');
                const max = parseInt($input.attr('max'));
                let value = parseInt($input.val()) || 0;
                if (value < max || isNaN(max)) {
                    $input.val(value + 1);
                }
            });

            // Handle decrement
            $('.decrement').on('click', function() {
                const $input = $(this).siblings('.number');
                const min = parseInt($input.attr('min'));
                let value = parseInt($input.val()) || 0;
                if (value > min || isNaN(min)) {
                    $input.val(value - 1);
                }
            });
        });
    </script>

</body>

</html>
