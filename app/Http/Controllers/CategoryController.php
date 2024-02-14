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
}
