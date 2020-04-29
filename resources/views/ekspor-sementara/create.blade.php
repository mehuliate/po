@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header bg-dark text-white">Buat Pengajuan Ekspor Sementara</div>

                <div class="card-body">
                    <h4>Pengajuan Ekspor Sementara</h4>
                    @include('ekspor-sementara.partial.create_form')
                </div>
            </div>
        </div>
    </div>

    {{--input detail barang--}}
    <div style="display: none;">
        <div class="form-group row" id="copy_detail_barang_input">
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
        </div>
    </div>
    <div style="display: none;">
        <div class="form-group row" id="copy_input_dokumen_pelengkap">
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" id="" placeholder="Jenis Dokumen">
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" id="" placeholder="Nomor">
            </div>
            <div class="col-sm-3">
                <input type="text" class="form-control form-control-sm" id="" placeholder="tanggal">
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    //add input
    let i = 1;
    function btnRv(rowId){

    }
    function cloneInputDetailBarang(){
        event.preventDefault();
        i++;
        rowId = 'input_barang_'+i;
        let clone = document.querySelector('#copy_detail_barang_input').cloneNode( true );
            clone.setAttribute( 'id', rowId );
        //create div btn remove
        let div = document.createElement('div')
            div.className="col-sm-1";
        let btnRv = document.createElement('button')
            btnRv.className="btn btn-sm btn-danger";
            btnRv.innerHTML='x';
            btnRv.setAttribute('onclick', 'removeInput("#'+rowId+'")');
        div.appendChild(btnRv);
        //append to clone
        clone.appendChild(div);
        document.querySelector('#detail_barang_input').appendChild( clone );
    }

    //remove input
    function removeInput(id){
        event.preventDefault();
        document.querySelector(id).remove();
    }
</script>
@endsection