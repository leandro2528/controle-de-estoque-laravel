@extends('layouts.app')

@section('title', 'Listagem de Compras')

@section('content')
<div class="container-fluid">
    <div class="row m-4">
        <div class="col-12">
            <a class="btn btn-primary btn-sm" href="">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                </span>
                <span>NOVA COMPRA</span>
            </a>
        </div>
    </div>
    <div class="row m-2">
        <div class="col-12">
            <table class="table table-hover table-striped">
                <thead style="font-size: 14px;">
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Preço Unitário</th>
                        <th>Data da Compra</th>
                        <th>Fornecedor</th>
                    </tr>
                </thead>
                <tbody style="font-size: 12px;">
                    @foreach($purchases as $purchase)
                    <tr>
                        <td>{{ $purchase->product->nome }}</td>
                        <td>{{ $purchase->quantidade }}</td>
                        <td>{{ $purchase->preco_unitario }}</td>
                        <td>{{ $purchase->data_compra }}</td>
                        <td>{{ $purchase->supplier->nome }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection