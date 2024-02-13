@extends('layouts.app')

@section('title', 'Listagem de Forcecedores')

@section('content')
<div class="container-fliud">
    <div class="row m-4">
        <div class="col-12">
            <a class="btn btn-primary btn-sm" href="{{ route('suppliers-create') }}">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                </span>
                <span class="ms-2">Novo fornecedor</span>
            </a>
        </div>
    </div>
    <div class="row  m-2">
        <div class="col-12">
           
            <table class="table table-hover table-striped">
                <thead style="font-size: 14px;">
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
                <tbody style="font-size: 12px;">
                    @foreach($suppliers as $supplier)
                    <tr>
                        <td>{{ $supplier->id }}</td>
                        <td>{{ $supplier->nome }}</td>
                        <td>{{ $supplier->endereco }}</td>
                        <td>{{ $supplier->telefone }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>
@endsection