@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card border-dark">
                <div class="card-header bg-dark text-white">{{ __('Register') }}</div>

                <div class="card-body">
                    
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <h4>Identitas Perusahaan</h4>
                                <hr>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="">Jenis Identitas</label>
                                        <select class="form-control" id="">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="">Nomor Identitas</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Upload Identitas Perusahaan</label>
                                    <input type="file" class="form-control-file" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control" id="">
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="email" class="form-control" id="">
                                </div>
                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}</label>

                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                                </div>
                            </div>
                            <div class="col">
                                <h4>Identitas Pendaftar</h4>
                                <hr>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="">Jenis Identitas</label>
                                        <select class="form-control" id="">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="">Nomor Identitas</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Upload Identitas Pendaftar</label>
                                    <input type="file" class="form-control-file" id="">
                                </div>

                                <div class="form-group">
                                    <label for="" class="">Nama</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Surat Kuasa</label>
                                    <input type="file" class="form-control-file" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Surat Pernyataan</label>
                                    <input type="file" class="form-control-file" id="">
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                         
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
