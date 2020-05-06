    {{--copy element input detail barang--}}
    <div style="display: none;">
        <div class="form-group row" id="copy_detail_barang_input">
            <div class="col-sm-3">
                <input type="text" class="form-control form-control-sm" name="uraian_detail_barang[]" placeholder="Uraian">
            </div>
            <div class="col-sm-1">
                <input type="text" class="form-control form-control-sm" name="jumlah_satuan_detail_barang[]" placeholder="Jumlah">
            </div>
            <div class="col-sm-2">
                <input type="text" class="form-control form-control-sm" name="jenis_satuan_detail_barang[]" placeholder="Jenis Satuan">
            </div>
            <div class="col-sm-1">
                <input type="text" class="form-control form-control-sm" name="jumlah_kemasan_detail_barang[]" placeholder="Jumlah">
            </div>
            <div class="col-sm-2">
                <input type="text" class="form-control form-control-sm" name="jenis_kemasan_detail_barang[]" placeholder="Jenis Kemasan">
            </div>
            <div class="col-sm-2">
                <input type="text" class="form-control form-control-sm" name="nomor_detail_barang[]" placeholder="Nomor/SN">
            </div>
        </div>
    </div>

    {{--copy element input dokumen pelengkap--}}
    <div style="display:none">
        <div class="form-group row" id="copy_dokumen_pelengkap_input">
            <div class="col-sm-3">
                <input type="text" class="form-control form-control-sm" name="jenis_dokumen_pelengkap[]" placeholder="Jenis Dokumen">
            </div>
            <div class="col-sm-3">
                <input type="text" class="form-control form-control-sm" name="nomor_dokumen_pelengkap[]"placeholder="Nomor">
            </div>
            <div class="col-sm-3">
                <input type="date" class="form-control form-control-sm" name="tanggal_dokumen_pelengkap[]" placeholder="tanggal">
            </div>
        </div>
    </div>

    {{--copy element input file dokumen pelengkap--}}
    <div style="display:none">
        <div class="form-group row" id="copy_dokumen_file_pelengkap_input">
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="nama_file_dokumen_pelengkap[]" placeholder="Nama Dokumen">
            </div>
            <div class="col-sm-4">
                <input type="file" class="form-control-file" name="file_dokumen_pelengkap[]">
            </div>
        </div>
    </div>