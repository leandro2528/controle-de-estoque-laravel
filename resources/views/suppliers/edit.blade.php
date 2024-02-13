@extends('layouts.app')

@section('title', 'Cadastro de Forcecedores')

@section('content')
<div class="container-fliud">
    <div class="row m-4">
        <div class="col-12">
            <a class="btn btn-secondary btn-sm" href="{{ route('suppliers-index') }}">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708z"/>
                    </svg>
                </span>
                <span class="ms-2">Voltar</span>
            </a>
        </div>
    </div>
    <div class="row  m-2">
        <div class="col-12">
           
            <form action="{{ route('suppliers-update', ['id'=>$suppliers->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group my-3">
                    <label for="">Nome</label>
                    <input type="text" class="form-control" value="{{ $suppliers->nome }}" name="nome">
                </div>

                <div class="form-group my-3">
                    <label for="">Endereço</label>
                    <input type="text" class="form-control" value="{{ $suppliers->endereco }}" name="endereco">
                </div>

                <div class="form-group my-3">
                    <label for="">Telefone</label>
                    <input type="text" class="form-control" value="{{ $suppliers->telefone }}" name="telefone">
                </div>

                <div class="form-group my-3">
                    <input type="submit" class="btn btn-outline-warning btn-sm" value="Atualizar">
                </div>
            </form>
            
        </div>
    </div>
</div>
@endsection