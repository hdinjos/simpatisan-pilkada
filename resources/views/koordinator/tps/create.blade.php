@extends('admin.layout.main')
@section('admin-content')
<style>
    .number-input {
        display: flex;
        align-items: center;
    }

    .number-input button {
        padding: 5px 10px;
        font-size: 16px;
        cursor: pointer;
    }

    .number-input input {
        width: 50px;
        text-align: center;
        font-size: 16px;
        margin: 0 5px;
    }
</style>

<div class="layout-specing">

    <div class="d-md-flex justify-content-between">
        <div>
            <h5 class="mb-0">Tambah TPS</h5>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/admins/tps" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label class="form-label">Nama TPS<span class="text-danger">*</span></label>
                                <input name="name" id="name" type="text" required class="form-control"
                                    placeholder="Nama TPS">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label">Jumlah Suara Paslon 1<span
                                        class="text-danger">*</span></label>
                                <div class="col-12 number-input">
                                    <button type="button" class="btn btn-danger decrement">-</button>
                                    <input class="form-control number" type="number" name="paslon1" id="paslon1"
                                        value="0" min="0" max="100" readonly>
                                    <button type="button" class="btn btn-success increment">+</button>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label">Jumlah Suara Paslon 2<span
                                        class="text-danger">*</span></label>
                                <div class="col-12 number-input">
                                    <button type="button" class="btn btn-danger decrement">-</button>
                                    <input class="form-control number" type="number" name="paslon2" id="paslon2"
                                        value="0" min="0" max="100" readonly>
                                    <button type="button" class="btn btn-success increment">+</button>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label">Jumlah Suara Tidak Sah<span
                                        class="text-danger">*</span></label>
                                <div class="col-12 number-input">
                                    <button type="button" class="btn btn-danger decrement">-</button>
                                    <input class="form-control number" type="number" name="tidak_sah" id="tidak_sah"
                                        value="0" min="0" max="100" readonly>
                                    <button type="button" class="btn btn-success increment">+</button>
                                </div>
                            </div>
                            <div class="col-12 mb-1" style="text-align: right">
                                <button class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
</div>

<script>
    $('#title').html('Tambah TPS')

    $(document).ready(function () {
      const $input = $('.number');

      // Handle increment
      $('.increment').on('click', function () {
        const $input = $(this).siblings('.number');
        const max = parseInt($input.attr('max'));
        let value = parseInt($input.val()) || 0;
        if (value < max || isNaN(max)) {
          $input.val(value + 1);
        }
      });

      // Handle decrement
      $('.decrement').on('click', function () {
        const $input = $(this).siblings('.number');
        const min = parseInt($input.attr('min'));
        let value = parseInt($input.val()) || 0;
        if (value > min || isNaN(min)) {
          $input.val(value - 1);
        }
      });
    });
</script>
@endsection
