@extends('admin.layout.main')
@section('admin-content')
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
                                <th class="border-bottom p-3" style="min-width: 220px;">Username</th>
                                <th class="border-bottom p-3" style="min-width: 200px;">Foto
                                </th>

                                <th class="border-bottom p-3" style="min-width: 200px;">Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $u)
                                <tr>
                                    <th class="p-3">{{ $u->name }}</th>
                                    <td class="p-3">{{ $u->username }}</td>
                                    <td class="p-3">
                                        <img width="50px" height="50px" src="{{ asset('storage/foto/' . $u->image) }}" />

                                    </td>
                                    <td class="p-3">
                                        <a href="/admins/koordinators/changepassword/{{ $u->id }}"
                                            class="btn btn-sm btn-success">Ganti Password</a>
                                        <a href="/admins/koordinators/{{ $u->id }}"
                                            class="btn btn-sm btn-primary">Lihat</a>
                                        <button onclick="deleteData({{ $u->id }})" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal" id="btnDelete{{ $u->id }}"
                                            data="{{ $u->id }}"
                                            class="btn btn-sm btn-soft-danger ms-2">Hapus</button>
                                    </td>
                                </tr>
                                <!-- End -->
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        {{-- <div class="row text-center">
        <!-- PAGINATION START -->
        <div class="col-12 mt-4">
            <div class="d-md-flex align-items-center text-center justify-content-between">
                <span class="text-muted me-3">Showing 1 - 10 out of 50</span>
                <ul class="pagination mb-0 justify-content-center mt-4 mt-sm-0">
                    <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Prev</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next</a></li>
                </ul>
            </div>
        </div>
        <!--end col-->
        <!-- PAGINATION END -->
    </div>
    <!--end row--> --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function deleteData(id) {
            const inputDelete = document.querySelector("#inputDelete");
            inputDelete.value = id;

        }



        @if (\Session::has('success'))
            Swal.fire('Ganti Password Berhasil');
        @endif

        @if (\Session::has('failed'))
            Swal.fire('Ganti Password Gagal');
        @endif

        $('#title').html('Koordinator Partisipan')
    </script>
@endsection
