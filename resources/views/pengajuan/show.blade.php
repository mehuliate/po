@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header bg-dark text-white">Pengajuan</div>

                <div class="card-body">
                    <h4>Identitas Perusahaan :</h4>

                    <div class="row">
                        <div class="col">
                            <table>
                                <tbody>
                                    <tr>
                                        <th style="width: 20%">Jenis Identitas</th>
                                        <td>: <input type="text" name="" id="" value="{{$dokumen->perusahaan->no_kd_id}}"></td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td>: {{$dokumen->perusahaan->nama}}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>: {{$dokumen->perusahaan->alamat}} dasd dadasd dasdasd das dasd a dada ad </td>
                                    </tr>
                                    <tr>
                                        <th>No.Tlp/Hp</th>
                                        <td>: {{$dokumen->perusahaan->no_tlp}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>: {{$dokumen->perusahaan->no_tlp}}</td>
                                    </tr>
                                </tbody>
                            </table>  
                        </div>
                        <div class="col">
                            <table class="table table-sm">
                                <tbody>
                                    <tr>
                                        <th style="width: 20%">Jenis Identitas</th>
                                        <td>: {{$dokumen->perusahaan->no_kd_id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td>: {{$dokumen->perusahaan->nama}}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>: {{$dokumen->perusahaan->alamat}}</td>
                                    </tr>
                                    <tr>
                                        <th>No.Tlp/Hp</th>
                                        <td>: {{$dokumen->perusahaan->no_tlp}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>: {{$dokumen->perusahaan->no_tlp}}</td>
                                    </tr>
                                </tbody>
                            </table>                            
                        </div>
                    </div>


                    <h4><b>Layanan :</b> {{$dokumen->layanan->nama}}</h4>

                    <h5>Dokumen Pelengkap:</h5>
                    <ul>
                        @foreach ($dokumen->layanan->lampiran as $item)
                        <li>{{$item->nama}}</li>
                            
                        @endforeach
                    </ul>

                    <h4>Upload Dokumen: <button class="btn btn-primary btn-sm">tambah</button> </h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-bodered table-hover table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Dokumen</th>
                                    <th scope="col">Nomor</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">File</th>
                                    <th scope="col">Act</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no=1    
                                @endphp
                                @foreach ($dokumen->dokumenLampiran as $dok)
                                    <tr>
                                        <th scope="row">{{$no++}}</th>
                                        <td>{{$dok->nama}}</td>
                                        <td>{{$dok->nomor}}</td>
                                        <td>{{$dok->tgl}}</td>
                                        <td>
                                            @if (!$dok->file_id)
                                                
                                            @else
                                            <a target="_blank" rel="noopener noreferrer" href="{{route('downloadLampiran', $dok->file_id)}}">lihat</a>

                                            @endif
                                        </td>
                                        <td>
                                            <a href="#">Edit</a>
                                            <a href="#">Hapus</a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    
                                @endforeach

                            </tbody>
                        </table>
                    </div>


                    <form method="POST" action="{{route('uploadLampiran', $dokumen->id)}}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="jenis dokumen">Jenis Dokumen</label>
                                <select class="form-control" name="jenis_dok">
                                    <option value="" selected>Choose...</option>
                                    @foreach ($dokumen->layanan->lampiran as $item)
                                    <option value="{{$item->nama}}">{{$item->nama}}</option>
                                    @endforeach
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="nomr">Nomor</label>
                                <input type="text" class="form-control" name="nomor">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" name="tgl">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="file">File</label>
                                <input type="file" class="form-control-file" name="dokPelengkap">
                            </div>
                            <div class="form-group com-md-1">
                                <button type="submit" class="btn btn-primary mt-4">Upload</button>

                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection