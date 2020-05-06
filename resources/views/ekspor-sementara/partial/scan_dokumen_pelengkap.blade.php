<div class="form-group row">
    <div class="col-sm-10">
        <h5>Scan Dokumen Pelengkap :</h5>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-12">
        <table class="table table-sm">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Dokumen</th>
                <th scope="col">Act</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>

                <td>
                    <a href="#">Hapus</a>
                </td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>
                    <a href="#">Hapus</a>
                </td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>
                    <a href="#">Hapus</a>
                </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
<div id="file_dokap">
    <div class="form-group row">
        <div class="col-sm-4">
            <input type="text" class="form-control form-control-sm" name="nama_file_dokumen_pelengkap[]" placeholder="Nama Dokumen">
        </div>
        <div class="col-sm-4">
            <input type="file" class="form-control-file" name="file_dokumen_pelengkap[]">
        </div>
    </div>

</div>
<div class="form-group row">
    <div class="col-sm-12">
        <button class="btn btn-primary btn-sm" onclick="addInput('#file_dokap')">Tambah</button>
    </div>
</div>