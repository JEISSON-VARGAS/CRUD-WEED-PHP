@extends('home')

@section('content')
<style>
    body {
        background: linear-gradient(to left, #d1c0ff, #9fe6a0, #ffb3a7, #a0e6ff);
    }
    
    .container {
        padding-top: 20px;
    }

    .btn {
        border-radius: 20px;
        margin-right: 5px;
    }

    .btn-primary {
        background-color: #4caf50;
        border-color: #4caf50;
    }

    .btn-danger {
        background-color: #f44336;
        border-color: #f44336;
    }

    .table {
        background-color: #fff;
        border-radius: 10px;
    }

    .table th,
    .table td {
        text-align: center;
    }

    .table th {
        background-color: #4caf50;
        color: #fff;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h1 class="text-center">CRUD WEED | PIPAS</h1>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">Nuevo</button>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>COLOR</th>
                            <th>MATERIAL</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pipas as $pipa)
                        <tr>
                            <td>{{ $pipa->id }}</td>
                            <td>{{ $pipa->color}}</td>
                            <td>{{ $pipa->material}}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{ $pipa->id }}">Editar</button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$pipa->id}}">Eliminar</button>
                            </td>
                        </tr>
                        @include('pipa.modal-info')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

@include('pipa.modal-create')
@endsection
