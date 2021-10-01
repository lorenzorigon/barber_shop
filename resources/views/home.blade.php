@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bem-vindo {{auth()->user()->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <div class="row p-4">
                            <div class=" col-12 d-flex justify-content-center mb-2">
                                <button class="btn btn-success btn-lg">Agendar Horário</button>
                            </div>
                            <div class=" col-12 d-flex justify-content-center">
                                <button class="btn btn-primary btn-lg">Meus Agendamentos</button>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
