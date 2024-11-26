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
            border: 1px solid #FEDE58;
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
    </style>

</head>

<body>

    <div class="container-sm my-custom-container">
        <div class="row mt-3 mb-3">
            <div class="d-flex justify-content-between mb-2">

                <div>
                    <div>
                        Selamat Datang,
                        <div class="user"></div>
                    </div>
                </div>

                {{-- <form method="POST" action="/auth/koordinators/logout" class="text-center">
                    @csrf
                   
                    <li class="list-inline-item mb-0 ms-1">
                        <div class="dropdown dropdown-primary">
                            <a href="#" class="btn btn-outline-primary" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="ti ti-menu-2"></i> Menu
                            </a>

                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-black shadow menu mt-3 py-3"
                                style="min-width: 200px">

                                <a class="dropdown-item text-white" href="/koordinators"><span
                                        class="mb-0 d-inline-block me-1"><i class="ti ti-home"></i></span>
                                    Home</a>
                                <a class="dropdown-item text-white" href="/koordinators//tps"><span
                                        class="mb-0 d-inline-block me-1"><i class="ti ti-box"></i></span>
                                    TPS</a>
                                <button type="submit" class="dropdown-item text-white"><span
                                        class="mb-0 d-inline-block me-1"><i class="ti ti-logout"></i></span>
                                    Logout</button>
                            </div>
                        </div>
                    </li>
                </form> --}}

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

            @if (count($tps) == 0)
                {{-- expr --}}

                <div class="row">
                    <div class="col-12 px-4 d-flex justify-content-end">
                        <a href="/saksi/{{ $id }}/create" class="btn btn-primary mb-3">Tambah</a>
                    </div>
                </div>
            @endif
            <div class="row mb-1">
                <div class="col-12 px-4">Data Hasil Perolehan Suara</div>
            </div>


            <div class="row">
                @foreach ($tps as $t)
                    <div class="col-12 px-4 mb-3">
                        <div class="custom-card">
                            <div class="text-center border-custom-card tps">{{ $t->nama_tps }}</div>
                            <div class="border-custom-card d-flex justify-content-between paslon">
                                <div>Paslon 1</div>
                                <div>{{ $t->paslon1 }}</div>
                            </div>
                            <div class="border-custom-card d-flex justify-content-between paslon">
                                <div>Paslon 2</div>
                                <div>{{ $t->paslon2 }}</div>
                            </div>
                            <div class="border-custom-card d-flex justify-content-between paslon">
                                <div>Tidak Sah</div>
                                <div>{{ $t->tidak_sah }}</div>
                            </div>
                            <div class=" d-flex justify-content-between paslon gap-3">
                                <a target="_blank" href="{{ asset('storage/tps/' . $t->c1) }}"
                                    class="btn btn-primary w-100">Lihat
                                    C1</a>
                                <a target="_blank" href="/saksi/{{ $id }}/edit/{{ $t->id }}"
                                    class="btn btn-primary w-100">Edit
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
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
    </script>

</body>

</html>
