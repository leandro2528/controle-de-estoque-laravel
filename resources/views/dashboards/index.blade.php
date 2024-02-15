@extends('layouts.app')

@section('title', 'PAINEL INICIAL')

@section('content')
<div class="container-fluid">
    <div class="row my-4">
        <div class="col-12">
                    <div class="container-fluid px-4">
                        <h3 class="mt-4">Painel inícial</h3>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <h5 class="card-body">Produto</h5>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link text-decoration-none" href="{{ route('products-index') }}">
                                            <h5>0{{ $totalProducts }}</h5>
                                        </a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                <h5 class="card-body">Fornecedores</h5>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link text-decoration-none" href="{{ route('suppliers-index') }}">
                                        <h5>0{{ $totalSuppliers }}</h5>
                                        </a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                <h5 class="card-body">Compras</h5>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link text-decoration-none" href="{{ route('purchases-index') }}">
                                        <h5>0{{ $totalPurchases }}</h5>
                                        </a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                <h5 class="card-body">Vendas</h5>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link text-decoration-none" href="{{ route('sales-index') }}">
                                        <h5>0{{ $totalSales }}</h5>
                                        </a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                       Vendas
                                    </div>
                                    <div class="card-body">
                                        @if(count($products))
                                        <table class="table table-bordered">
                                            <thead style="font-size: 12px; color: #666;">
                                                <tr>
                                                    <th>Produto</th>
                                                    <th>Quantidade</th>
                                                    <th>Valor</th>
                                                    <th>Data da Venda</th>
                                                </tr>
                                            </thead>
                                            <tbody style="font-size: 12px;">
                                                @foreach($products as $product )
                                                <tr>
                                                    <td>{{ $product->produto }}</td>
                                                    <td>{{ $product->quantidade }}</td>
                                                    <td>{{ $product->valor }}</td>
                                                    <td>{{ $product->data_venda }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @else 
                                        <div class="alert alert-info">
                                            <p>Não á vendas nessa tabela</p>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                       Compras
                                    </div>
                                    <div class="card-body"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Mais vendidos
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
        </div>
    </div>
</div>
@endsection