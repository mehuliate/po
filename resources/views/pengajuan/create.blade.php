@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header bg-dark text-white">Buat Pengajuan</div>

                <div class="card-body">
                    <h1>Identitas</h1>
                    <p>Nama: </p>

                    <form method="POST" action="{{route('pengajuanStore')}}">
                    @csrf
                        <div class="form-group">
                            <h2>Pilih jenis layanan :</h2>
                            <select class="form-control" id="" name="layanan">
                            <option value="" selected>Choose...</option>
                            @foreach ($layanan as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                
                            @endforeach
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection