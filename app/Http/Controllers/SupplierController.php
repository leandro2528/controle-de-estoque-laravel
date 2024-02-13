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

    public function create() {
        $suppliers = Supplier::all();
        return view('suppliers.create', ['suppliers'=>$suppliers]);
    }

    public function store(Request $request) {
        Supplier::create($request->all());
        return redirect()->route('suppliers-index');
    }
}
