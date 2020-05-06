<div class="form-group row">
    <div class="col-sm-12">
        <h5>Dokumen Pelengkap :</h5>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-12">
        <table class="table table-sm">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Jenis Dokumen</th>
                <th scope="col">Nomor</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Act</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>Otto</td>
                <td>
                    <a href="#">Hapus</a>
                </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
<div id="dokumen_pelengkap_input">
    <div class="form-group row">
        <div class="col-sm-3">
            <input type="text" class="form-control form-control-sm" name="jenis_dokumen_pelengkap[]" placeholder="Jenis Dokumen">
        </div>
        <div class="col-sm-3">
            <input type="text" class="form-control form-control-sm" name="nomor_dokumen_pelengkap[]"placeholder="Nomor">
        </div>
        <div class="col-sm-3">
            <input type="date" class="form-control form-control-sm" name="tanggal_dokumen_pelengkap[]" placeholder="tanggal">
        </div>
        {{-- <div class="col-sm-1"> --}}
            {{-- <button class="btn btn-danger btn-sm"> --}}
                {{-- <span aria-hidden="true">&times;</span> --}}
            {{-- </button> --}}
        {{-- </div> --}}
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-10">
        <button class="btn btn-primary btn-sm" onclick="addInput('#dokumen_pelengkap_input')">Tambah</button>
    </div>
</div>