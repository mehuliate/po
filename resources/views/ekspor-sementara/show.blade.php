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
    @include('ekspor-sementara.partial.prototype_input')
</div>
@endsection

@section('script')
<script>
    //add input detail
    let i = 1;
    let a = 1;
    let b = 1;
    function addInput(classId){
        event.preventDefault();
        let rowId;
        let clone;
        let div;
        let btnRv
        if(classId == '#detail_barang_input'){
            i++;
            rowId = 'input_barang_'+ i;
            clone = document.querySelector('#copy_detail_barang_input').cloneNode( true );
                clone.setAttribute( 'id', rowId );
                //create div btn remove
                div = document.createElement('div')
                    div.className="col-sm-1";
                btnRv = document.createElement('button')
                    btnRv.className="btn btn-sm btn-danger";
                    btnRv.innerHTML='<span aria-hidden="true">&times;</span>';
                    btnRv.setAttribute('onclick', 'removeInput("#'+rowId+'")');
                div.appendChild(btnRv);
                //append to clone
                clone.appendChild(div);
                document.querySelector('#detail_barang_input').appendChild( clone );
        } else if (classId == '#dokumen_pelengkap_input') {
                a++;
                rowId = 'input_dok_pel_'+ a;
                clone = document.querySelector('#copy_dokumen_pelengkap_input').cloneNode( true );
                    clone.setAttribute( 'id', rowId );
                //create div btn remove
                div = document.createElement('div')
                    div.className="col-sm-1";
                btnRv = document.createElement('button')
                    btnRv.className="btn btn-sm btn-danger";
                    btnRv.innerHTML='<span aria-hidden="true">&times;</span>';
                    btnRv.setAttribute('onclick', 'removeInput("#'+rowId+'")');
                div.appendChild(btnRv);
                //append to clone
                clone.appendChild(div);
                document.querySelector('#dokumen_pelengkap_input').appendChild( clone );
        } else if (classId == '#file_dokap'){
                b++;
                rowId = 'input_file_dokap_'+ a;
                clone = document.querySelector('#copy_dokumen_file_pelengkap_input').cloneNode( true );
                    clone.setAttribute( 'id', rowId );
                //create div btn remove
                div = document.createElement('div')
                    div.className="col-sm-1";
                btnRv = document.createElement('button')
                    btnRv.className="btn btn-sm btn-danger";
                    btnRv.innerHTML='<span aria-hidden="true">&times;</span>';
                    btnRv.setAttribute('onclick', 'removeInput("#'+rowId+'")');
                div.appendChild(btnRv);
                //append to clone
                clone.appendChild(div);
                document.querySelector('#file_dokap').appendChild( clone );
        }
    }
    //remove input
    function removeInput(id){
        event.preventDefault();
        document.querySelector(id).remove();
    }
</script>
@endsection