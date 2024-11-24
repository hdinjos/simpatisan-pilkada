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

        .btn-tambah {
            position: absolute;
            bottom: 30px;
            right: 30px;
        }
    </style>

</head>

<body>

    <div class="container my-custom-container">
        <div class="row mb-3">
            <div class="col-12 text-centerß">
                <div class="p-3 text-center">Selemat Datang Fariz</div>
            </div>

        </div>
        <form class="row mb-3" method="POST" action="/koordinators" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Nama Pemilih <span class="text-danger">*</span></label>
                    <input name="name" id="name" type="text" class="form-control" placeholder="Title :">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select name="gender" class="form-control">
                    <option value="1">Laki-Laki</option>
                    <option value="2">Perempuan</option>
                </select>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">No TPS <span class="text-danger">*</span></label>
                    <input name="no_tps" type="number" id="name" type="text" class="form-control"
                        placeholder="Title :">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Foto Pemilih <span class="text-danger">*</span></label>
                    <input name="foto_self" hidden type="file" id="fileFotoOrang">
                    <div>
                        <button type="button" class="btn btn-primary" id="start-camera1">
                            Buka Kamera
                        </button>
                    </div>
                    <video id="video1" width="320" height="240" autoplay></video>
                    <div>
                        <button type="button" type="button" id="btnAmbilFotoOrang" class="btn btn-primary">Ambil
                            Foto</button>
                    </div>
                    <canvas id="canvas1" width="320" height="240"></canvas>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Foto Ktp <span class="text-danger">*</span></label>
                    <input name="foto_ktp" hidden type="file" id="fileFotoKtp">
                    <div>
                        <button type="button" class="btn btn-primary" id="start-camera2">
                            Buka Kamera
                        </button>
                    </div>
                    <video id="video2" width="320" height="240" autoplay></video>
                    <div>
                        <button type="button" id="btnAmbilFotoKtp" class="btn btn-primary">Ambil Foto</button>
                    </div>
                    <canvas id="canvas2" width="320" height="240"></canvas>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <button class="btn btn-primary">Simpan</button>
            </div>



        </form>

    </div>
    <!-- Offcanvas End -->
    <script>
        let camera_button1 = document.querySelector("#start-camera1");
        let video1 = document.querySelector("#video1");
        // let click_button = document.querySelector("#click-photo");
        let canvas1 = document.querySelector("#canvas1");
        const fileFotoOrang = document.getElementById('fileFotoOrang');
        const btnAmbilFotoOrang = document.getElementById('btnAmbilFotoOrang');
        btnAmbilFotoOrang.style.display = "none";
        canvas1.style.display = "none";
        video1.style.display = "none";

        // Helper function to convert data URL to Blob
        function dataURLToBlob(dataURL) {
            const [meta, base64] = dataURL.split(',');
            const byteString = atob(base64);
            const arrayBuffer = new ArrayBuffer(byteString.length);
            const uintArray = new Uint8Array(arrayBuffer);

            for (let i = 0; i < byteString.length; i++) {
                uintArray[i] = byteString.charCodeAt(i);
            }

            return new Blob([uintArray], {
                type: meta.split(':')[1].split(';')[0]
            });
        }

        camera_button1.addEventListener('click', async function() {
            btnAmbilFotoOrang.style.display = "block";
            video1.style.display = "block";
            canvas1.style.display = "none";
            let stream = await navigator.mediaDevices.getUserMedia({
                video: true,
                audio: false
            });
            video1.srcObject = stream;

        });

        btnAmbilFotoOrang.addEventListener('click', function() {
            canvas1.getContext('2d').drawImage(video1, 0, 0, canvas1.width, canvas1.height);
            let image_data_url = canvas1.toDataURL('image/jpeg');

            // Convert the data URL to a Blob object (for file input)
            const blob = dataURLToBlob(image_data_url);

            // Create a new File object from the Blob and set it as the value of the input element
            const file = new File([blob], 'captured-image_pemilih.png', {
                type: 'image/png'
            });
            console.log(file);
            const dataTransfer = new DataTransfer();
            dataTransfer.items.add(file);

            fileFotoOrang.files = dataTransfer.files;
            video1.style.display = "none";
            canvas1.style.display = "block";
            btnAmbilFotoOrang.style.display = "none";
            // data url of the image
            // console.log(image_data_url);
        });






        let camera_button2 = document.querySelector("#start-camera2");
        let video2 = document.querySelector("#video2");
        let click_button2 = document.querySelector("#click-photo2");
        let canvas2 = document.querySelector("#canvas2");
        const fileFotoKtp = document.getElementById('fileFotoKtp');
        const btnAmbilFotoKtp = document.getElementById('btnAmbilFotoKtp');
        btnAmbilFotoKtp.style.display = "none";
        canvas2.style.display = "none";
        video2.style.display = "none";

        // Helper function to convert data URL to Blob
        function dataURLToBlob(dataURL) {
            const [meta, base64] = dataURL.split(',');
            const byteString = atob(base64);
            const arrayBuffer = new ArrayBuffer(byteString.length);
            const uintArray = new Uint8Array(arrayBuffer);

            for (let i = 0; i < byteString.length; i++) {
                uintArray[i] = byteString.charCodeAt(i);
            }

            return new Blob([uintArray], {
                type: meta.split(':')[1].split(';')[0]
            });
        }

        camera_button2.addEventListener('click', async function() {
            let stream = await navigator.mediaDevices.getUserMedia({
                video: true,
                audio: false
            });
            video2.srcObject = stream;
            btnAmbilFotoKtp.style.display = "block";
            video2.style.display = "block";
            canvas2.style.display = "none";
        });

        btnAmbilFotoKtp.addEventListener('click', function() {
            canvas2.getContext('2d').drawImage(video2, 0, 0, canvas2.width, canvas2.height);
            let image_data_url = canvas2.toDataURL('image/jpeg');

            // Convert the data URL to a Blob object (for file input)
            const blob = dataURLToBlob(image_data_url);

            // Create a new File object from the Blob and set it as the value of the input element
            const file = new File([blob], 'captured-image_ktp.png', {
                type: 'image/png'
            });
            console.log(file);
            const dataTransfer = new DataTransfer();
            dataTransfer.items.add(file);

            fileFotoKtp.files = dataTransfer.files;
            video2.style.display = "none";
            canvas2.style.display = "block";
            btnAmbilFotoKtp.style.display = "none";
            // data url of the image
            // console.log(image_data_url);
        });
    </script>

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
