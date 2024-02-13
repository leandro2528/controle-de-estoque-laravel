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

    public function edit($id) {
        $suppliers = Supplier::where('id', $id)->first();
        return view('suppliers.edit', ['suppliers'=>$suppliers]);
    }


    public function update(Request $request, $id) {
        $data = [
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'telefone' => $request->telefone
        ];

        $suppliers = Supplier::where('id', $id)->update($data);
        return redirect()->route('suppliers-index');
    }

    public function destroy($id) {
        $suppliers = Supplier::where('id', $id)->delete();
        return redirect()->route('suppliers-index');
    }
}
