<form method="POST" action="{{$data->id == null ? route('eksporSementara.store') : route('eksporSementara.edit', $data->id)}}" enctype="multipart/form-data">
    @csrf
    @isset($data->id)
        {{ method_field('PATCH')}}
    @endisset
    <div class="form-group row">
        <label for="Nama Perusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
        <div class="col-sm-10">
        <input type="text" class="form-control form-control-sm" name="nama_perusahaan" value="{{ old('nama_perusahaan', $data->nama_perusahaan)}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="Alamat Perusahaan" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <textarea class="form-control form-control-sm" rows="2" name="alamat_perusahaan">{{ old('alamat_perusahaan', $data->alamat_perusahaan)}}</textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="Jenis Barang" class="col-sm-2 col-form-label">Jenis barang</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" name="jenis_barang" value="{{ old('jenis_barang', $data->jenis_barang)}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" name="jumlah" value="{{ old('jumlah', $data->jumlah)}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="invoice" class="col-sm-2 col-form-label">Invoice</label>
        <div class="col-sm-5">
        <input type="text" class="form-control form-control-sm" name="nomor_invoice" placeholder="Nomor" value="{{ old('nomor_invoice', $data->nomor_invoice)}}">
        </div>
        <div class="col-sm-5">
        <input type="date" class="form-control form-control-sm" name="tgl_invoice" placeholder="Tanggal" value="{{ old('tgl_invoice', $data->tgl_invoice)}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="Nilai Barang" class="col-sm-2 col-form-label">Nilai Barang</label>
        <div class="col-sm-10">
        <input type="text" class="form-control form-control-sm" name="nilai_barang" value="{{ old('nilai_barang', $data->nilai_barang)}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="Serial Number" class="col-sm-2 col-form-label">Serial Number</label>
        <div class="col-sm-10">
        <input type="text" class="form-control form-control-sm" name="serial_barang" value="{{ old('serial_barang', $data->serial_barang)}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="Negara Tujuan" class="col-sm-2 col-form-label">Negara Tujuan</label>
        <div class="col-sm-10">
        <input type="text" class="form-control form-control-sm" name="negara_tujuan" value="{{ old('negara_tujuan', $data->negara_tujuan)}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="Jangka Waktu" class="col-sm-2 col-form-label">Jangka Waktu</label>
        <div class="col-sm-10">
        <input type="text" class="form-control form-control-sm" name="jangka_waktu" value="{{ old('jangka_waktu', $data->jangka_waktu)}}">
        </div>
    </div>
    <hr>
    @include('ekspor-sementara.partial.detail_barang')
    <hr>
    @include('ekspor-sementara.partial.dokumen_pelengkap')
    <hr>
    @include('ekspor-sementara.partial.scan_dokumen_pelengkap')
    <hr>
    <div class="form-group row">
        <div class="col-sm-12">
            <button type="submit" class="btn btn-primary btn-lg">Kirim</button>
            <button type="submit" class="btn btn-warning btn-lg">Reject</button>
            <button type="submit" class="btn btn-success btn-lg">Setuju</button>
            <button type="submit" class="btn btn-danger btn-lg">Hapus</button>
        </div>
    </div>
    <hr>
    @include('ekspor-sementara.partial.dokumen_persetujuan')
    <hr>
    @include('ekspor-sementara.partial.history')
</form>