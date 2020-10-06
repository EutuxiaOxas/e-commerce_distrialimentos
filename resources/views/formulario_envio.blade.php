@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header">{{ __('Formulario de envio') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('shiping.store')}}">
                        @csrf
                        <input type="hidden" name="orden_id" value="{{$orden->id}}">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Documento de identidad') }}</label>

                            <div class="col-md-6">
                                <input id="documento_de_identidad" type="text" class="form-control @error('documento_de_identidad') is-invalid @enderror" name="documento_de_identidad" value="{{ old('documento_de_identidad') }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('dirección 1') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('apellido') is-invalid @enderror" name="direccion_1" value="{{ old('direccion_1') }}" required >

                                @error('direccion_1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="direccion_2" class="col-md-4 col-form-label text-md-right">{{ __('dirección 2') }}</label>

                            <div class="col-md-6">
                                <input id="direccion_2" type="text" class="form-control @error('email') is-invalid @enderror" name="direccion_2" value="{{ old('direccion_2') }}" required >

                                @error('direccion_2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required>

                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Código_postal') }}</label>

                            <div class="col-md-6">
                                <input id="codigo_postal" type="text" class="form-control @error('codigo_postal') is-invalid @enderror" name="codigo_postal" required>
                                @error('codigo_postal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

    

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar datos de envio') }}
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
