<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('dashboard.categories.index', [
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Category $category)
    {
        return view('dashboard.categories.show', [
        'category' => $category
        ]);
    }
        

    public function edit(Category $category)
    {
        return view('dashboard.categorys.edit', [
            'category' => $category,
            'categories' => Category::all()
        ]);
    }

    public function destroy(Category $category)
    {
        if ($category->image) {
            Storage::delete($category->image);
        }

        Category::destroy($category->id);
        return redirect('/dashboard/categorys')->with('success', 'New category has been deleted!');
    }
}


