<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categorys = Category::orderBy('id', 'desc')->get();
        return view('categorys.index', ['categorys'=>$categorys]);
    }

    public function create() {
        $categorys = Category::all();
        return view('categorys.create', ['categorys'=>$categorys]);
    }

    public function store(Request $request) {
        Category::create($request->all());
        return redirect()->route('categorys-index');
    }

    public function edit($id) {
        $categorys = Category::where('id', $id)->first();
        return view('categorys.edit', ['categorys'=>$categorys]);
    }

    public function update(Request $request, $id) {
        $data = [
            'nome' => $request->nome
        ];

        $categortys = Category::where('id', $id)->update($data);
        return redirect()->route('categorys-index');
    }

    public function destroy($id) {
        $categorys = Category::where('id', $id)->delete();
        return redirect()->route('categorys-index');
    }
}
