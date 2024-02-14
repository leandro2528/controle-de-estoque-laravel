@extends('layouts.app')

@section('title', 'Compras')

@section('content')
<div class="container-fluid">
    <div class="row m-4">
        <div class="col-12">
            <a class="btn btn-secondary btn-sm" href="{{ route('purchases-create') }}">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708z"/>
                    </svg>
                </span>
                <span>VOLTAR</span>
            </a>
        </div>
    </div>
    <div class="row m-2">
        <div class="col-12">
            <form action="{{ route('purchases-store') }}" method="POST">
                @csrf
                <div class="form-group my-3">
                    <label for="">Produto</label>
                    <select class="form-select" name="product_id" id="product_id">
                        <option value="select">-- Selecione um produto --</option>
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="">Quantidade</label>
                    <input type="text" class="form-control" name="quantidade">
                </div>
                <div class="form-group my-3">
                    <label for="">Preco Unitário</label>
                    <input type="text" class="form-control" name="preco_unitario">
                </div>
                <div class="form-group my-3">
                    <label for="">Data da Compra</label>
                    <input type="date" class="form-control" name="data_compra">
                </div>
                <div class="form-group my-3">
                    <label for="">Fornecedor</label>
                    <select class="form-select" name="supplier_id" id="supplier_id">
                        <option value="select">-- Selecione um fornecedor --</option>
                        @foreach($suppliers as $supplier)
                            <option value="{{ $supplier->id }}">{{ $supplier->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <input type="submit" class="btn btn-primary btn-sm" value="Comprar">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection