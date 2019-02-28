<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\category as AppCategory;

class CategoryController extends Controller
{
    public function index()
    {
        $Categorys = Category::all();
        return view('home', ['Categorys' => $Categorys]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Category::create([
        //     'name' => $request->name
        // ]);
        // request()->only('name') ['name' => 'abc']
        // Category::create([
        //     'name' => request()->name
        // ])

        Category::create(request()->only('name'));
        return redirect(route('category.index'));
    }
    public function show(Category $Category)
    {
        //
    }
    public function edit(Category $Category)
    {
        dd($Category);
    }

    public function update(Request $request, category $Category)
    {
        // dd($request->name);
        $Category->update(request()->only('name'));
        return redirect(route('category.index'));
    }

    public function destroy(category $Category)
    {
        $Category->delete();
        return redirect('/category');
    }
}
