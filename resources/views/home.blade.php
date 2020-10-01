@extends('layouts.app')

@section('title')
    Perfil | {{$user->name}}
@endsection

@section('content')
<div class="container mt-5">
    @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-5">
                <div class="card-header">{{ __('Perfil') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Has iniciado sesión') }}
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ordenes realizadas</div>
                <div class="card-body ">
                     @foreach($ordenes as $orden)
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div>
                                <strong>Orden: #{{$orden->id}} | Estatus: {{$orden->status}} | Total: {{$orden->total_amount}}$</strong>
                            </div>
                            <button class="btn btn-sm btn-primary">Detalles</button>
                        </div>
                     @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
