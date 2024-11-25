@extends('admin.layout.main')
@section('admin-content')
<div class="layout-specing">
    <div class="d-md-flex justify-content-between">
        <div>
            <h5 class="mb-0">TPS</h5>

            {{-- <nav aria-label="breadcrumb" class="d-inline-block mt-1">
                <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item text-capitalize"><a href="index.html">Landrick</a></li>
                    <li class="breadcrumb-item text-capitalize active" aria-current="page">Shop</li>
                </ul>
            </nav> --}}
        </div>

        <div class="mt-4 mt-sm-0">
            <a href="/admins/tps/create" class="btn btn-primary">Tambah</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-4">
            <div class="table-responsive shadow rounded">
                <table class="table table-center bg-white mb-0">
                    <thead>
                        <tr>
                            <th class="border-bottom p-3">TPS</th>
                            <th class="border-bottom p-3">Paslon 1</th>
                            <th class="border-bottom p-3">Paslon 2</th>
                            <th class="border-bottom p-3">Tidak Sah</th>
                            <th class="border-bottom p-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
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

<script>
    $('#title').html('TPS')
</script>
@endsection
