@extends('layouts.app')

@section('content')
<div class="container-fluid">
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
    //add input detail
    let i = 1;
    function cloneInputDetailBarang(){
        event.preventDefault();
        i++;
        let rowId = 'input_barang_'+i;
        let clone = document.querySelector('#copy_detail_barang_input').cloneNode( true );
            clone.setAttribute( 'id', rowId );
        //create div btn remove
        let div = document.createElement('div')
            div.className="col-sm-1";
        let btnRv = document.createElement('button')
            btnRv.className="btn btn-sm btn-danger";
            btnRv.innerHTML='<span aria-hidden="true">&times;</span>';
            btnRv.setAttribute('onclick', 'removeInput("#'+rowId+'")');
        div.appendChild(btnRv);
        //append to clone
        clone.appendChild(div);
        document.querySelector('#detail_barang_input').appendChild( clone );
    }

    //add dok pelengkap input
    a=1
    function cloneInputDokPelengkap(){
        event.preventDefault();
        a++;
        let rowId = 'input_dok_pel_'+a;
        let clone = document.querySelector('#copy_dokumen_pelengkap_input').cloneNode( true );
            clone.setAttribute( 'id', rowId );
        //create div btn remove
        let div = document.createElement('div')
            div.className="col-sm-1";
        let btnRv = document.createElement('button')
            btnRv.className="btn btn-sm btn-danger";
            btnRv.innerHTML='<span aria-hidden="true">&times;</span>';
            btnRv.setAttribute('onclick', 'removeInput("#'+rowId+'")');
        div.appendChild(btnRv);
        //append to clone
        clone.appendChild(div);
        document.querySelector('#dokumen_pelengkap_input').appendChild( clone );
    }
    //remove input
    function removeInput(id){
        event.preventDefault();
        document.querySelector(id).remove();
    }
</script>
@endsection