<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sale;
use App\Models\Product;

class SaleController extends Controller
{
    public function index() {
        $sales = Sale::orderBy('id', 'desc')->with('product')->get();
        $products = Product::all();
        return view('sales.index', ['sales'=>$sales, 'products'=>$products]);
    }

    public function create() {
        $sales = Sale::all();
        $products = Product::all();
        return view('sales.create', ['sales'=>$sales, 'products'=>$products]);
    }

    public function store(Request $request) {
        Sale::create($request->all());
        $products = Product::all();
        return redirect()->route('sales-index');
    }
}
