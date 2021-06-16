@extends('layout')
@section('main')
    <x-nav></x-nav>
    <div class="container">
        <div id="create-user" class="container col-md-4">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    Estado del prestamo
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Id prestamo: {{$dato->id_prestamo}}</li>
                        <li class="list-group-item">Su prestamo fue:
                            @if(isset($estado) AND $estado == "Autorizado" )
                                <div class="alert alert-success" role="alert">
                                    Autorizado
                                </div>
                            @elseif(isset($estado) AND $estado == "No autorizado")
                                <div class="alert alert-danger" role="alert">
                                    No autorizado
                                </div>
                            @endif </li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
