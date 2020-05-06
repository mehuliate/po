<form method="POST" action="{{route('eksporSementara.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label for="Nama Perusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
        <div class="col-sm-10">
        <input type="text" class="form-control form-control-sm" name="nama_perusahaan">
        </div>
    </div>
    <div class="form-group row">
        <label for="Alamat Perusahaan" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <textarea class="form-control form-control-sm" rows="2" name="alamat_perusahaan"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="Jenis Barang" class="col-sm-2 col-form-label">Jenis barang</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" name="jenis_barang">
        </div>
    </div>
    <div class="form-group row">
        <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" name="jumlah">
        </div>
    </div>
    <div class="form-group row">
        <label for="invoice" class="col-sm-2 col-form-label">Invoice</label>
        <div class="col-sm-5">
        <input type="text" class="form-control form-control-sm" name="nomor_invoice" placeholder="Nomor">
        </div>
        <div class="col-sm-5">
        <input type="date" class="form-control form-control-sm" name="tgl_invoice" placeholder="Tanggal">
        </div>
    </div>
    <div class="form-group row">
        <label for="Nilai Barang" class="col-sm-2 col-form-label">Nilai Barang</label>
        <div class="col-sm-10">
        <input type="text" class="form-control form-control-sm" name="nilai_barang">
        </div>
    </div>
    <div class="form-group row">
        <label for="Serial Number" class="col-sm-2 col-form-label">Serial Number</label>
        <div class="col-sm-10">
        <input type="text" class="form-control form-control-sm" name="serial_barang">
        </div>
    </div>
    <div class="form-group row">
        <label for="Negara Tujuan" class="col-sm-2 col-form-label">Negara Tujuan</label>
        <div class="col-sm-10">
        <input type="text" class="form-control form-control-sm" name="negara_tujuan">
        </div>
    </div>
    <div class="form-group row">
        <label for="Jangka Waktu" class="col-sm-2 col-form-label">Jangka Waktu</label>
        <div class="col-sm-10">
        <input type="text" class="form-control form-control-sm" name="jangka_waktu">
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
    {{-- <hr>
    @include('ekspor-sementara.partial.dokumen_persetujuan')
    <hr>
    @include('ekspor-sementara.partial.history') --}}
</form>