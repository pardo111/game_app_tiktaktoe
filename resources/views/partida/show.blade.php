@extends('layouts.app')

@section('template_title')
    {{ $partida->name ?? __('Show') . " " . __('Partida') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Partida</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('partidas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Usuario:</strong>
                                    {{ $partida->id_usuario }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Resultado:</strong>
                                    {{ $partida->resultado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $partida->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Opcion:</strong>
                                    {{ $partida->opcion }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
