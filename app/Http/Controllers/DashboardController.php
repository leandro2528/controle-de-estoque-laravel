<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Supplier;
use App\Models\Purchase;
use App\Models\Sale;

class DashboardController extends Controller
{
    public function index() {
        $products = Product::all();


        $totalProducts = Product::count();
        $totalSuppliers = Supplier::count();
        $totalPurchases = Purchase::count();
        $totalSales = Sale::count();
        return view('dashboards.index', ['products'=>$products, 'totalProducts'=>$totalProducts,
        'totalSuppliers'=>$totalSuppliers,
        'totalPurchases'=>$totalPurchases,
        'totalSales'=>$totalSales
        ]);
    }
}
