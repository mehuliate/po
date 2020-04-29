<div class="form-group row">
    <div class="col-sm-10">
        <h5>Detail Barang :</h5>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-12">
        <div class="table-responsive">
            <table class="table table-sm">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Uraian</th>
                    <th scope="col">Jumlah Satuan</th>
                    <th scope="col">Jenis Satuan</th>
                    <th scope="col">Jumlah Kemasan</th>
                    <th scope="col">Jenis Kemasan</th>
                    <th scope="col">SN</th>
                    <th scope="col">Act</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Alat Potong kepala</td>
                    <td>1</td>
                    <td>Unit</td>
                    <td>1</td>
                    <td>Package</td>
                    <td>0001012020</td>
                    <td>
                        <a href="#">Hapus</a>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div id="detail_barang_input">
    <div class="form-group row" id="input_barang_1">
        <div class="col-sm-3">
            <input type="text" class="form-control form-control-sm" name="uraian_detail_barang[]" placeholder="Uraian">
        </div>
        <div class="col-sm-1">
            <input type="text" class="form-control form-control-sm" name="jumlah_satuan_detail_barang[]" placeholder="Jumlah">
        </div>
        <div class="col-sm-2">
            <input type="text" class="form-control form-control-sm" name="jenis_satuan_detail_barang[]" placeholder="Satuan">
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
        {{-- <div class="col-sm-1"> --}}
            {{-- <button class="btn btn-sm btn-danger">x</button> --}}
        {{-- </div> --}}
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-10">
        <button class="btn btn-primary btn-sm" onclick="cloneInputDetailBarang()">Tambah</button>
    </div>
</div>