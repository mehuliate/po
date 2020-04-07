@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header bg-dark text-white">layanan</div>

                <div class="card-body">
                    <h1>Layanan Perizinan</h1>
                    <hr>
                    <ul>
                        @foreach ($layan as $item)
                        <li>{{$item->nama}}</li>
                            
                        @endforeach
                    </ul>

                    <hr>
                    {{-- <form class="form-inline">
                        <div class="form-row align-items-center">
                            <div class="col-sm-2">
                                <label class="sr-only" for="">Jenis Dokumen</label>
                                <select class="form-control" id="" placeholder="jenis dokumen">
                                    <option selected>Choose...</option>
                                    @foreach ($layan as $item)
                                    <option value="">{{$item->nama}}</option>
                                        
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-2 mr-5">
                                <label class="sr-only" for="">Nomor</label>
                                <input type="text" class="form-control" id="" placeholder="Nomor">
                            </div>
                            <div class="col-sm-2 mr-5">
                                <label class="sr-only" for="">Tanggal</label>
                                <input type="date" class="form-control" id="" placeholder="Tanggal">
                            </div>
                            <div class="col-sm-2 mr-10">
                                <label class="sr-only" for="">File</label>
                                <input type="file" class="form-control-file" id="" placeholder="File">
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </div>
                    </form> --}}

                    <form action="">
                        <div class="form-group">
                            <label for="jenis dokumen">Jenis Dokumen</label>
                            <select class="form-control" id="">
                            <option selected>Choose...</option>
                            @foreach ($layan as $item)
                            <option value="">{{$item->nama}}</option>
                                
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nomr">Nomor</label>
                            <input type="text" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="file" class="form-control-file" id="">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Upload</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
