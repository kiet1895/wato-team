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
        // request()->only('name') ['name' => 'abc']
        // Category::create([
        //     'name' => request()->name
        // ])

        $category = Category::create(request()->only('name'));
        return response()->json([
            'success' => true,
            'id' => $category->id 
        ]);
    }
    public function update(Request $request,$id)
    {
        // $category->update(request()->only('name'));
        // return redirect(route('categories.index'));

        $category = Category::find($id);
        $category->update(request()->only('name'));
        return response()->json([
            'success' => true,
        ]);
    }

    public function destroy($id)
    {
        Category::find($id)->delete($id);
        return response()->json([
            'success' => true,
        ]);
        // return redirect(route('categories.index'));
    }
}
