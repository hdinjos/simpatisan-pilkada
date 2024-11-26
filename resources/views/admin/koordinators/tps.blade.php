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
                <h5 class="mb-0">Monitoring TPS</h5>
            </div>
        </div>

        <div class="card">

            <form onsubmit="onsubmitForm(event)" class="card-body">
                <div class="row">
                    <div class="col-6">
                        <label class="form-label">Kecamatan <span class="text-danger">*</span></label>
                        <select id="inputKec" name="kecamatan" class="form-control">
                            <option value="">Semua</option>
                            <option value="BADAS">Badas</option>
                            <option value="BANYAKAN">Banyakan</option>
                            <option value="GAMPENGREJO">Gampengrejo</option>
                            <option value="GROGOL">Grogol</option>
                            <option value="GURAH">Gurah</option>
                            <option value="KANDANGAN">Kandangan</option>
                            <option value="KANDAT">Kandat</option>
                            <option value="KAYEN_KIDUL">Kayen Kidul</option>
                            <option value="KEPUNG">Kepung</option>
                            <option value="KRAS">Kras</option>
                            <option value="KUNJANG">Kunjang</option>
                            <option value="MOJO">Mojo</option>
                            <option value="NGADILUWIH">Ngadiluwih</option>
                            <option value="NGANCAR">Ngancar</option>
                            <option value="NGASEM">Ngasem</option>
                            <option value="PAGU">Pagu</option>
                            <option value="PAPAR">Papar</option>
                            <option value="PARE">Pare</option>
                            <option value="PLEMAHAN">Plemahan</option>
                            <option value="PLOSOKLATEN">Plosoklaten</option>
                            <option value="PUNCU">Puncu</option>
                            <option value="PURWOASRI">Purwoasri</option>
                            <option value="RINGINREJO">Ringinrejo</option>
                            <option value="SEMEN">Semen</option>
                            <option value="TAROKAN">Tarokan</option>
                            <option value="WATES">Wates</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Suara<span class="text-danger">*</span></label>
                        <select id="inputSuara" name="suara" class="form-control">
                            <option value="">Semua</option>
                            <option value="paslon1">Paslon 1</option>
                            <option value="paslon2">Paslon 2</option>
                            <option value="tidak_sah">Tidak Sah</option>
                        </select>
                    </div>

                </div>
                <div class="text-center my-5">
                    <button class="btn btn-primary">Hitung</button>
                </div>

                <div class="d-md-flex justify-content-between">
                    <div>
                        <h5 class="mb-0">Total Perhitungan Suara</h5>
                    </div>
                </div>
                <div class="table-responsive border rounded">
                    <table class="table table-center bg-white mb-0">
                        <thead>
                            <tr>
                                <th class="border-bottom text-center">Paslon 1</th>
                                <th class="border-bottom text-center">Paslon 2</th>
                                <th class="border-bottom text-center">Tidak Sah</th>
                                <th class="border-bottom text-center">Total Suara</th>

                            </tr>
                        </thead>
                        <tbody id="totalSuara">
                            <td class="text-center">5</td>
                            <td class="text-center">5</td>
                            <td class="text-center">5</td>
                            <td class="text-center">10</td>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>

        {{-- <div class="row">
            <div class="col-12 mt-4">
                <div class="table-responsive shadow rounded">
                    <table class="table table-center bg-white mb-0">
                        <thead>
                            <tr>
                                <th class="border-bottom p-3">Nama TPS</th>
                                <th class="border-bottom p-3">Kecamatan</th>
                                <th class="border-bottom p-3">Kelurahan</th>
                                <th class="border-bottom p-3" style="min-width: 220px;">Paslon 1</th>
                                <th>Paslon 2
                                </th>

                                <th class="border-bottom p-3" style="min-width: 200px;">Tidak Sah
                                </th>
                                <th class="border-bottom p-3" style="min-width: 200px;">Saksi
                                </th>
                                <th class="border-bottom p-3" style="min-width: 200px;">No. HP Saksi
                                </th>


                                <th class="border-bottom p-3" style="min-width: 200px;">Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tps as $t)
                                <tr>
                                    <td class="p-3">{{ $t->nama_tps }}</td>
                                    <td class="p-3">{{ $t->kecamatan }}</td>
                                    <td class="p-3">{{ $t->kelurahan }}</td>
                                    <td class="p-3">{{ $t->paslon1 }} Suara</td>
                                    <td class="p-3">{{ $t->paslon2 }} Suara</td>
                                    <td class="p-3">{{ $t->tidak_sah }} Suara</td>
                                    <td class="p-3">{{ $t->saksi_name }}</td>
                                    <td class="p-3">{{ $t->phone }}</td>

                                    <td class="p-3">
                                        <a target="_blank" href="{{ asset('storage/tps/' . $t->c1) }}"
                                            class="btn btn-sm btn-primary">Lihat C1</a>
                                    </td>
                                </tr>
                                <!-- End -->
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end col-->
        </div> --}}
        <div class="d-md-flex justify-content-between mt-3">
            <div>
                <h5 class="mb-0">Detail Data Suara</h5>
            </div>
        </div>
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-12 mt-4">

                        <!-- DataTable placeholder -->
                        <table id="dataTable" class="display">
                            <thead>
                                <tr>
                                    <th>Nama Tps</th>
                                    <th>Kecamatan</th>
                                    <th>Kelurahan</th>
                                    <th>Paslon 1</th>
                                    <th>Paslon 2
                                    </th>
                                    <th>Tidak Sah
                                    </th>
                                    <th>Saksi
                                    </th>
                                    <th>No. HP Saksi
                                    </th>
                                    <th>Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data rows will be inserted dynamically here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
        function deleteData(id) {
            const inputDelete = document.querySelector("#inputDelete");
            inputDelete.value = id;

        }



        $('#title').html('Koordinator Partisipan');

        // Fetch data when the page loads
        document.addEventListener('DOMContentLoaded', function() {
            // Send a GET request to the Laravel backend to fetch data
            fetch('/admins/tps-first')
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Clear the current table data
                        const tableBody = document.querySelector('#dataTable tbody');
                        const totalSuara = document.querySelector('#totalSuara');
                        tableBody.innerHTML = ''; // Clear any existing rows
                        totalSuara.innerHTML = `
                            <td class="text-center">${data.totalPaslon1}</td>
                            <td class="text-center">${data.totalPaslon2}</td>
                            <td class="text-center">${data.totalTidakSah}</td>
                            <td class="text-center">${data.totalAll}</td>
                        
                        `;



                        // Insert new rows into the DataTable
                        data.data.forEach(item => {
                            const row = document.createElement('tr');

                            row.innerHTML = `
                                 <td>${item.nama_tps}</td>
                                <td>${item.kecamatan}</td>
                                <td>${item.kelurahan}</td>
                                <td>${item.paslon1}</td>
                                <td>${item.paslon2}</td>
                                <td>${item.tidak_sah}</td>
                                <td>${item.saksi_name}</td>
                                <td>${item.phone}</td>
                                <td class="p-3">
                                    <a target="_blank" href="/storage/tps/${item.c1}" class="btn btn-sm btn-primary">Lihat C1</a>
                                </td>
                            `;
                            tableBody.appendChild(row);
                        });

                        // Initialize DataTable after inserting rows
                        $('#dataTable').DataTable();
                    }
                })
                .catch((error) => {
                    console.error('Error fetching data:', error);
                });
        });


        async function onsubmitForm(event) {
            event.preventDefault()
            const kecVal = document.querySelector("#inputKec");
            const suaraVal = document.querySelector("#inputSuara");


            const formData = {
                kecamatan: kecVal.value,
                suara: suaraVal.value
            };

            await fetch('/admins/tps', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify(formData)
                })
                .then(response => response.json())
                .then(data => {

                    if (data.success) {
                        // Clear the current table data

                        const tableBody = document.querySelector('#dataTable tbody');
                        tableBody.innerHTML = ''; // Clear previous rows

                        const totalSuara = document.querySelector('#totalSuara');
                        totalSuara.innerHTML = `
                            <td class="text-center">${data.totalPaslon1}</td>
                            <td class="text-center">${data.totalPaslon2}</td>
                            <td class="text-center">${data.totalTidakSah}</td>
                            <td class="text-center">${data.totalAll}</td>
                        
                        `;

                        // Insert new rows into the DataTable
                        data.data.forEach(item => {
                            const row = document.createElement('tr');
                            row.innerHTML = `
                                <td>${item.nama_tps}</td>
                                <td>${item.kecamatan}</td>
                                <td>${item.kelurahan}</td>
                                <td>${item.paslon1}</td>
                                <td>${item.paslon2}</td>
                                <td>${item.tidak_sah}</td>
                                <td>${item.saksi_name}</td>
                                <td>${item.phone}</td>
                                <td class="p-3">
                                    <a target="_blank" href="/storage/tps/${item.c1}" class="btn btn-sm btn-primary">Lihat C1</a>
                                </td>
                    `;
                            tableBody.appendChild(row);
                        });

                        // Reinitialize DataTable to refresh it
                        $('#dataTable').DataTable();
                    }
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        }
    </script>
@endsection
