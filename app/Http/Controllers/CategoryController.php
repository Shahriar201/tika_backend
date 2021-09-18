<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('categories.edit', ['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {
        //dd($request->name);

        $request->validate([
            'name' => 'required',
            'min_age' => 'required'
        ]);

        $category->name = $request->name;
        $category->min_age = $request->min_age;
        $category->save();

        return redirect(route('categories.index'))->with(['message' => $category->name . ' is updated.']);
    }

    public function destroy(Category $category)
    {
        //
    }
}
