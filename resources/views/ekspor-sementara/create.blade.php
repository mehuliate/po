@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header bg-dark text-white">Buat Pengajuan</div>

                <div class="card-body">
                    <h4>Pengajuan Ekspor Sementara</h4>
                <form>
                    <div class="form-group row">
                        <label for="Nama Perusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="nama_perusahaan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Nama Perusahaan" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                        <textarea class="form-control form-control-sm" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Nama Perusahaan" class="col-sm-2 col-form-label">Jenis barang</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Nama Perusahaan" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Nama Perusahaan" class="col-sm-2 col-form-label">Invoice</label>
                        <div class="col-sm-5">
                        <input type="text" class="form-control form-control-sm" id="" placeholder="Nomor">
                        </div>
                        <div class="col-sm-5">
                        <input type="date" class="form-control form-control-sm" id="" placeholder="Tanggal">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Nama Perusahaan" class="col-sm-2 col-form-label">Nilai Barang</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Nama Perusahaan" class="col-sm-2 col-form-label">Serial Number</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Nama Perusahaan" class="col-sm-2 col-form-label">Negara Tujuan</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Nama Perusahaan" class="col-sm-2 col-form-label">Jangka Waktu</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection