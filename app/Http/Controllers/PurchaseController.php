<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Purchase;
use App\Models\Product;
use App\Models\Supplier;

class PurchaseController extends Controller
{
    public function index() {
        $purchases = Purchase::orderBy('id', 'desc')->with('product', 'supplier')->get();
        $products = Product::all();
        $suppliers = Supplier::all();
        return view('purchases.index', ['purchases'=>$purchases, 'products'=>$products, 'suppliers'=>$suppliers]);
    }
}
