<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\category as AppCategory;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('home', ['categories' => $categories]);
        // return response()->json([
        //     'Category'=>$Categorys
        // ]);
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

        // Category::create(request()->only('name'));
        Category::create([
            'name' => $request->name
        ]);
        return response()->json([
            'success' => true,
        ]);
    }
    public function update(Request $request,$id)
    {
        // dd($category);
        // $category->update(request()->only('name'));
        // return redirect(route('categories.index'));

        // $request->get('name');
        // dd($request);
        $category = Category::find($id);
        $category->update([
            'name' => $request->name
        ]);
        return response()->json([
            'success' => true,
        ]);
    }

    public function destroy(category $Category)
    {
        $Category->delete();
        return redirect(route('categories.index'));
    }
}
