<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index() {
        $suppliers = Supplier::orderBy('id', 'desc')->get();
        return view('suppliers.index', ['suppliers'=>$suppliers]);
    }
}
