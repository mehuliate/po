@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header bg-dark text-white">Browse</div>

                <div class="card-body">
                    <table class="table table-bordered table-sm table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Layanan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dokumen as $item)
                                <tr>
                                <th scope="row">1</th>
                                <td>{{$item->layanan->nama}}</td>
                                <td>{{$item->status}}</td>
                                <td>
                                    <a href="{{route('pengajuanShow',$item->id)}}">detail</a>
                                    <a href="{{route('pengajuanShow',$item->id)}}">hapus</a>
                                </td>
                                </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                        {{ $dokumen->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection